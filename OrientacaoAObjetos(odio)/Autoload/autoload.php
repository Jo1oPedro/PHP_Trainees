<?php

spl_autoload_register(function($class) {

    //echo "Nome: " . $class . "<br/> <br/> ";
    if(file_exists($class.'.php')) {
        require $class.'.php'; 
    }
});