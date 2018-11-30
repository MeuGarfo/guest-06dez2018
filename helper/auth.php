<?php
//Anderson Ismael
//29 de novembro de 2018

function getAuthInstance(){
    $db=db();
    return new Basic\Auth($db);
}

function isAuth(){
    $Auth=getAuthInstance();
    return $Auth->isAuth();
}

function logout(){
    $Auth=getAuthInstance();
    return $Auth->logout();
}

function signin(){
    $Auth=getAuthInstance();
    return $Auth->signin();
}
