<!DOCTYPE html>
<html lang="pt" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Hello World</title>
    <?php view('inc/header'); ?>
</head>
<body>
    <?php view('inc/navOffline'); ?>
    <div class="container">
        <h1>Mensagens</h1>
        <hr>
        <form class="form-vertcal" action="/mensagem" method="post">
            <div class="control-group">
                <label for="name">Nome</label>
                <div class="controls">
                    <input type="text" name="name" value="" id="name">
                </div>
            </div>
            <div class="control-group">
                <label for="msg">Mensagem</label>
                <div class="controls">
                    <textarea name="msg" rows="8" cols="80" id="msg"></textarea>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <button type="submit" name="button">Enviar mensagem</button>
                </div>
            </div>
        </form>
    </div> <!--container-->
    <?php view('inc/footer'); ?>
</body>
</html>
