<?php
@session_start();
define('ENV','development');

require_once "core/Function.php";
require_once "core/Controller.php";

if(ENV == 'development'){
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    set_error_handler('showError');
}

define('_DIR_ROOT', __DIR__);

if(!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on'){
    $web_root = 'https://' . $_SERVER['HTTP_HOST'];
}else{
    $web_root = 'http://' . $_SERVER['HTTP_HOST'];
}

$forder = str_replace(strtolower($_SERVER['DOCUMENT_ROOT']),'', str_replace('\\','/', strtolower(_DIR_ROOT)));
$web_root = trim($web_root . trim($forder, '\\'), '/');

define('_WEB_ROOT', $web_root);
// load third party libraries
if(file_exists('vendor/autoload.php')){
    require_once 'vendor/autoload.php';
}

$autoloads = [
    'Controller',
    'Database',
    'Request',
];

foreach($autoloads as $file){
    require_once 'core/'.$file.'.php';
}

$request = new Request();
$controllerName = $request->controller;
$methodName = $request->method;

if(!file_exists('controllers/' . $controllerName . '.php')){
    show404Error();
}

// create controllerName
require_once('controllers/' . $controllerName . '.php');
$controller = new $controllerName();

if(! method_exists($controller, $methodName)){
    show404Error();
}

$controller->{$methodName}();