<?php
$id=segment(2);
if(is_numeric($id) && isAjax()){
    $db=db();
    $where=[
        'id'=>$id
    ];
    $mensagem=$db->get("mensagens",'*',$where);
    $data=[
        'mensagem'=>$mensagem
    ];
    view('modal/mensagem',$data);
}elseif(is_numeric($id) && !isAjax()){
    $url='/';
    redirect($url);
}elseif (isAjax() && !is_numeric($id)) {
    switch ($id) {
        case 'criar':
        view('modal/criarMensagem');
        break;
        default:
        view('404');
        break;
    }
}else{
    view('404');
}
?>
