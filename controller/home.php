<?php
$db=db();
$where=[
    'id[>]'=>0
];
$mensagens=$db->select('mensagens','*',$where);
$data=[
    'mensagens'=>$mensagens,
    'title'=>'Livro de visitas',
    'subtitle'=>'Mensagens'
];
view("home",$data);
?>
