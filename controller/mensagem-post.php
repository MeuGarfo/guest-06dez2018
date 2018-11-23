<?php
$name=@$_POST['name'];
$msg=@$_POST['msg'];
if(strlen($name)<1){
    $data=[
        'title'=>'Erro',
        'msg'=>'Digite o seu nome'
    ];
    view('erro',$data);
}elseif(strlen($msg)<1){
    $data=[
        'title'=>'Erro',
        'msg'=>'Digite uma mensagem'
    ];
    view('erro',$data);
}else{
    $data=[
        'name'=>$name,
        'msg'=>$msg,
        'created_at'=>time()
    ];
    $db=db();
    $db->insert("mensagens",$data);
    $id=$db->id();
    $url='/';
    redirect($url);
}
?>
