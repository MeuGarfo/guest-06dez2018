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
            <div class="span8">
                <h1>Mensagens</h1>
                <?php
                if(isset($mensagens) && is_array($mensagens) && count($mensagens) > 0){
                    foreach ($mensagens as $mensagem) {
                        print '<b>'.$mensagem['name'].'</b>';
                        $id=$mensagem['id'];
                        view('menu/mensagem',['id'=>$id]);
                        print '<p id="mensagem'.$id.'">'.$mensagem['msg'].'</p>';
                        $data=date('r',$mensagem['created_at']);
                        $link='<a onclick="javascript:abrirMensagem('.$id.')" href="#mensagem'.$id.'">'.$data.'</a>';
                        print '<p>';
                        print '<small>'.$link.'</small>';
                        print '</p><hr>';
                    }
                }else{
                    print '<p>Nenhuma mensagem encontrada</p>';
                }
                ?>
            </div>
            <div class="span4">
                <h1>Escrever</h1>
                <?php view('form/mensagem'); ?>
                <script type="text/javascript">
                $('#msg').keypress(function (e) {
                    if (e.which == 13) {
                        $('#mensagem').submit();
                        return false;
                    }
                });
                </script>
            </div>
        </div>
    </div> <!--container-->
    <?php view('inc/footer'); ?>
</body>
</html>
