<?php

function autoloader($className) {
    $array_path = [
        '/models/',
        '/components/'
    ];
    foreach($array_path as $path){
        $file_path = ROOT . $path . $className . '.php';
        if(is_file($file_path))
            include_once $file_path; 
    }
   
}

spl_autoload_register('autoloader');

