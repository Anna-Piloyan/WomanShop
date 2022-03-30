<?php
//Front Controller

//$string = "21-11-2015";
// рік 2015, місяць 11, день 21

//$pattern = '/([0-9]{2})-([0-9]{2})-([0-9]{4})/';
//$replacement = "year $3, month $2, day $1";
//$result = preg_replace($pattern, $replacement, $string);
//echo $result;
//die;
// $string = "PHP is a prog asd 123 asdf";
// $pattern = '/\d{3}/';

// $result = preg_match($pattern, $string);
// echo $result;


//1. загальні налаштування
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();
//2. підключення файлів системи
define('ROOT', dirname(__FILE__));
require_once(ROOT . '/components/Autoload.php');
//require_once(ROOT . '/components/Router.php');
//require_once(ROOT . '/components/Db.php');
//echo dirname(__FILE__);

//3. встановлення зєднання з БД
//4. виклик роутер
$router = new Router();
$router->run();


?>


