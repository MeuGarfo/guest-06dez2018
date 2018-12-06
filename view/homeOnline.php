<!DOCTYPE html>
<html lang="pt" dir="ltr">
<head>
    <meta charset="utf-8">
    <title><?php print $_ENV['SITE_NAME']; ?></title>
    <?php view('inc/header'); ?>
</head>
<body>
    <?php
    if($user['type']=='admin'){
        view('inc/navAdmin',$data);
    }else{
        view('inc/navOnline',$data);
    }
    ?>
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
                    view('menu/mensagem',['user'=>$user,'mensagem'=>$mensagem]);
                    print '<b>';
                    e($mensagem['name']);
                    print '</b>';
                    print '<p>';
                    e($mensagem['msg']);
                    print '</p>';
                    $data=date('r',$mensagem['created_at']);
                    $link='<a onclick="abrirMensagem('.$mensagem['id'].'); return false;" href="/mensagem/'.$mensagem['id'].'">'.$data.'</a>';
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


<!-- Modal -->
<div id="criarMensagem" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <?php view('modal/criarMensagem'); ?>
</div>

</body>
</html>
