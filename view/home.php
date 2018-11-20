<!DOCTYPE html>
<html lang="pt" dir="ltr">
<head>
    <meta charset="utf-8">
    <title><?php print $title; ?></title>
    <?php view('inc/header'); ?>
</head>
<body>
    <?php view('inc/navOffline',$data); ?>
    <div class="container">
        <div class="row">
            <div class="span8">
                <h1><?php print $subtitle; ?></h1>
                <?php
                if(isset($mensagens) && is_array($mensagens) && count($mensagens) > 0){
                    foreach ($mensagens as $mensagem) {
                        print '<p>';
                        print '<b>'.$mensagem['name'].':</b><br>';
                        print $mensagem['msg'];
                        print '</p><hr>';
                    }
                }else{
                    print '<p>Nenhuma mensagem encontrada</p>';
                }
                ?>
            </div>
            <div class="span4">
                <h1>Escrever</h1>
                <form class="form-vertcal" action="/mensagem" method="post" id="mensagem">
                    <div class="control-group">
                        <label for="name">Nome</label>
                        <div class="controls">
                            <input class="span4" type="text" name="name" value="Anderson Ismael" id="name">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="msg">Mensagem</label>
                        <div class="controls">
                            <textarea class="span4" name="msg" rows="8" cols="80" id="msg"></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <button type="submit" name="button">Enviar mensagem</button>
                        </div>
                    </div>
                </form>
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
