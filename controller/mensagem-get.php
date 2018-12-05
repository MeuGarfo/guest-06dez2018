<?php
helper('auth');
$id=segment(2);
$crud=segment(3);
$db=db();
$where=[
    'id'=>$id
];
$mensagem=$db->get("mensagens",'*',$where);
if($mensagem){
    $where=[
        'id'=>$mensagem['user_id'],
    ];
    $mensagem['name']=$db->get('users','*',$where)['name'];
}
$user=isAuth();
$data=[
    'mensagem'=>$mensagem,
    'user'=>$user
];
if(is_numeric($id) && isAjax()){
    if($crud=='editar'){
        view('modal/editarMensagem',$data);
    }elseif($crud=='apagar'){
        view('modal/apagarMensagem',$data);
    }else{
        view('modal/mensagem',$data);
    }
}elseif(is_numeric($id) && !isAjax()){
    view('mensagem',$data);
}elseif (isAjax() && !is_numeric($id)) {
    switch ($id) {
        case 'criar':
        view('modal/criarMensagem',$data);
        break;
        default:
        view('404',$data);
        break;
    }
}else{
    view('404',$data);
}
?>
