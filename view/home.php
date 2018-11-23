<!DOCTYPE html>
<html lang="pt" dir="ltr">
<head>
    <meta charset="utf-8">
    <title><?php print $_ENV['SITE_NAME']; ?></title>
    <?php view('inc/header'); ?>
</head>
<body>
    <?php view('inc/navOffline',$data); ?>
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="text-center">
                    <a class="btn btn-large btn-success" href="javascript:criarMensagem();">
                        <i class="icon-white  icon-pencil"></i>
                        Escrever mensagem
                    </a><hr>
                </div>
                <?php
                if(isset($mensagens) && is_array($mensagens) && count($mensagens) > 0){
                    foreach ($mensagens as $mensagem) {
                        $id=$mensagem['id'];
                        print '<b>'.$mensagem['name'].'</b>';
                        view('menu/mensagem',['id'=>$id]);
                        print '<p>'.$mensagem['msg'].'</p>';
                        $data=date('r',$mensagem['created_at']);
                        $link='<a onclick="javascript:abrirMensagem('.$id.')" href="javascript:void();">'.$data.'</a>';
                        print '<p>';
                        print '<small>'.$link.'</small>';
                        print '</p><hr>';
                    }
                }else{
                    print '<p>Nenhuma mensagem encontrada</p>';
                }
                ?>
            </div>
        </div>
    </div> <!--container-->
    <?php view('inc/footer'); ?>
</body>
</html>
