<?php
$db=db();
$where=[
    'id[>]'=>0,
    'ORDER'=>[
        'created_at'=>'DESC'
    ]
];
$mensagens=$db->select('mensagens','*',$where);
$data=[
    'mensagens'=>$mensagens
];
view("home",$data);
?>
