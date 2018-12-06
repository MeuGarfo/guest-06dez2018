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
                <h1>Mensagens</h1><hr>
                <?php
                if(isset($mensagens) && is_array($mensagens) && count($mensagens) > 0){
                    foreach ($mensagens as $mensagem) {
                        $id=$mensagem['id'];
                        print '<b>';
                        e($mensagem['name']);
                        print '</b>';
                        print '<p>';
                        e($mensagem['msg']);
                        print '</p>';
                        $data=date('r',$mensagem['created_at']);
                        $link='<a onclick="abrirMensagem('.$id.'); return false;" href="/mensagem/'.$id.'">'.$data.'</a>';
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
