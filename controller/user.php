<?php
helper('auth');
$user=isAuth();
if(isset($user['type']) && $user['type']=='admin'){
    $db=db();
    $where=[
        'id[>]'=>0,
        'ORDER'=>[
            'name'=>'ASC'
        ]
    ];
    $data=[
        'users'=>$db->select('users','*',$where)
    ];
    view('user',$data);
}else{
    $data=[
        'title'=>'Erro 403',
        'msg'=>'Acesso negado'
    ];
    view('erro',$data);
}
?>
