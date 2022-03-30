<?php

class Router
{

    private $routes;

    public function __construct()
    {
        $routesPath = ROOT . '/config/routes.php';
        $this->routes = include($routesPath);
    }
    public function run()
    {
        //echo "In method run in router";
        //print_r($this->routes);

        //1. отримати стрічку запиту
        $uri = trim($_SERVER["REQUEST_URI"], '/');
        //2. перевірити наявність такого запиту в роутс
        foreach ($this->routes as $uriPattern => $path) {
            // echo "<hr>$uriPattern -> $path";

            if (preg_match("~$uriPattern~", $uri)) {

                ///////////////////////

                //echo '<br> Where we looking for (what user input)' . $uri;
                //echo '<br> What we looking for (connections with rules)' . $uriPattern;
                //echo '<br> Who is checking (inner path)' . $path;
                // Отримуємо внутрішній шлях і зовнішній згідно правилам
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
                //echo "<br> Сформировано : $internalRoute";

                //3. якщо є співпадіння, визначити який контролер та екшшн 
                // обробляє запит
                //echo $path;

                //$segments = explode('/', $path);
                $segments = explode('/', $internalRoute);
                $controllerName = ucfirst(array_shift($segments) . 'Controller');
                //echo $controllerName;
                $actionName = 'action' . ucfirst(array_shift($segments));
                //echo $actionName;
                //print_r($segments); // остатки для разбивки
                //4. підключити файл контролерра
                $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';
                include_once($controllerFile);


                //5. створити обєкт та викликати його екшн
                $controllerObject = new $controllerName;
                //$result = $controllerObject->$actionName($segments);
                $result = call_user_func_array(array($controllerObject, $actionName),$segments);
                
                if ($result) break;
            }
        }
    }
}
