<?php
helper('auth');
$db=db();
$msg=@$_POST['msg'];
$msg=printable($msg);
$user=isAuth();
$crud=segment(3);
if($user && $user['type']=='user'){
    $where=[
        'id'=>segment(2),
        'user_id'=>$user['id']
    ];
}elseif($user && $user['type']=='admin'){
    $where=[
        'id'=>segment(2)
    ];
}
if($crud=='criar'){
    $where['user_id']=$user['id'];
}
if($user){
    if($crud=='apagar'){
        //apagar mensagem
        $db->delete("mensagens",$where);
        $url='/';
        redirect($url);
    }else{
        if(strlen($msg)<1 || strlen($msg)>280){
            $data=[
                'title'=>'Erro',
                'msg'=>'Digite uma mensagem com no mínimo 1 e no máximo 280 caracteres'
            ];
            view('erro',$data);
        }elseif($crud=='editar'){
            //editar mensagem
            $data=[
                'msg'=>$msg,
                'updated_at'=>time()
            ];
            $db->update("mensagens",$data,$where);
        }else{
            //criar mensagem
            $data=[
                'msg'=>$msg,
                'created_at'=>time(),
                'user_id'=>$user['id']
            ];
            $db->insert("mensagens",$data);
        }
        redirect('/');
    }
}else{
    redirect('/signin');
}
