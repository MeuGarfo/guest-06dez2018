<?php
helper('auth');
$db=db();
$msg=@$_POST['msg'];
$user=isAuth();
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
$crud=segment(3);
if($user){
    if($crud=='apagar'){
        //apagar mensagem
        $db->delete("mensagens",$where);
        $url='/';
        redirect($url);
    }elseif(strlen($msg)<1){
        $data=[
            'title'=>'Erro',
            'msg'=>'Digite uma mensagem'
        ];
        view('erro',$data);
    }else{
        if($crud=='editar'){
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
