<?php
$title='Criar conta';
?>
<!DOCTYPE html>
<html lang="pt" dir="ltr">
<head>
    <meta charset="utf-8">
    <title><?php print $title; ?></title>
    <?php view('inc/header'); ?>
</head>
<body>
    <?php view('inc/navOffline'); ?>
    <div class="container">
        <div class="offset4 span3">
            <h1><?php print $title; ?></h1>
            <?php
            if(isset($error)){
                ?>
                <div class="alert alert-error">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Dados inválidos</strong>
                    <ul>
                        <li>Digite um nome com no mínimo 3 caracteres</li>
                        <li>Digite um email válido</li>
                        <li>Digite uma senha com no mínimo 8 caracteres</li>
                    </ul>
                </div>
                <?php
            }
            ?>
            <form class="form-vertical" action="/signup" method="post">
                <label for="name">Nome</label>
                <input type="text" id="name" name="name" class="input-block-level">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" class="input-block-level">
                <label for="password">Senha</label>
                <input type="password" id="password" name="password" class="input-block-level">
                <button type="submit" class="btn-large btn-block btn-primary"><?php print $title; ?></button>
            </form>
        </div>
    </div> <!--container-->
    <?php view('inc/footer'); ?>
</body>
</html>
