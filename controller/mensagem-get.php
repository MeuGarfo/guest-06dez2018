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
    $url='/#mensagem'.$id;
    redirect($url);
}else{
    view('404');
}
?>
