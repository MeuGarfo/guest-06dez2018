<?php
helper('auth');
$db=db();
$user=isAuth();
$crud=segment(3);
if($user && $user['type']=='user'){
    redirect('/');
}elseif($user  && $user['type']=='admin'){
    if($crud=='apagar'){
        //apagar mensagem
        $where=[
            'id'=>segment(2)
        ];
        $db->delete("users",$where);
        $where=[
            'user_id'=>segment(2)
        ];
        $db->delete("mensagens",$where);
        $url='/user';
        redirect($url);
    }
}else{
    redirect('/signin');
}
