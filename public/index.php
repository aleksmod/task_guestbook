<?php

require_once('../Classes/DB.php');
require_once('../Classes/Session.php');
require_once('../libs/smarty/Smarty.class.php');

spl_autoload_register(function($class) {
    $path = "../%s/".$class.".php";
    switch (true) {
        case strpos($class, "Controller"):
            $path = sprintf($path, 'Controllers');
            break;
        case strpos($class, "Model"):
            $path = sprintf($path, 'Models');
            break;
        case strpos($class, "Interface"):
            $path = sprintf($path, 'Interfaces');
            break;
        default:
            $path = sprintf($path, 'Classes');
            break;
    }

    (file_exists($path)) ? require_once($path) : die($path. " path not found");

});

Session::start();
$smarty = new Smarty();
$smarty->setTemplateDir('../Views');

$data = ltrim($_SERVER['REQUEST_URI'],"/");
$data = explode("?",$data);
$data = array_shift($data);
$data = explode("/",$data);

$controller =  (empty($data)) ? "MainController" : ucfirst(array_shift($data))."Controller";
$action = (empty($data)) ? "index" : array_shift($data);
$params = ($data) ?: [];

$controllerObj = new $controller();
if(!method_exists($controllerObj, $action)) {
    die($action. " method not found");
}
$controllerObj->$action();

