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
switch($controller){
    case '/':
    controller("home");
    break;
    case 'mensagem':
    controller($controller);
    break;
    case 'signin':
    controller($controller);
    break;
    case 'user':
    controller('user');
    break;
    default:
    view('404');
    break;
}
