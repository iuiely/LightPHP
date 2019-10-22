<?php

function get_instance($class){
    return ($class)::getInstance();
}

if (!function_exists('config')) {
    function config($name, $value = null)    {
        return get_instance('\Lightphp\Config')->get($name,$value);
    }
}

if(!function_exists('request')){
    function request(){
        return get_instance('\Lightphp\web\HttpRequest');
    }
}

if(!function_exists('handlefile')){
    function handlefile(){
        return get_instance('\Lightphp\HandleFilesystem');
    }
}
