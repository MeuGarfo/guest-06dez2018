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

function signup($user=false){
    $Auth=getAuthInstance();
    if($user){
        return $Auth->signup($user);
    }else{
        return $Auth->signup();
    }
}
