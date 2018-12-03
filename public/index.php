<?php
//dependencias
require '../inc/autoload.php';
if(isDev()){
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}

//config
date_default_timezone_set('America/Sao_Paulo');

//regras
$segment=segment();
$controller=$segment[1];
if($controller=='/'){
    $controller='home';
}
$filename=ROOT.'controller/'.$controller.'.php';
if(file_exists($filename) && !strpos($controller, '-')){
    controller($controller);
}else{
    view('404');
}
