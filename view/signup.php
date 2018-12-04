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

            <form id="frmSignup" class="form-vertical" action="/signup" method="post">
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" id="name" name="name" class="form-control input-block-level" minlength="3" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control input-block-level" required>
                </div>
                <div class="form-group">
                    <label for="password">Senha</label>
                    <input type="password" id="password" name="password" class="form-control input-block-level" minlength="8"  maxlength="32" required>
                </div>
                <button type="submit" id="btnSignup" class="btn-large btn-block btn-primary"><?php print $title; ?></button>
            </form>
            <script type="text/javascript">
            $(function() {

                var validator = $( "#frmSignup" ).validate();

                <?php
                if(isset($_GET['error'])){
                    ?>
                    validator.showErrors({
                        "name":"Digite um nome com no mínimo 3 caracteres",
                        "email":"Digite um email válido",
                        "password":"Digite uma senha como no mínimo 8 caracteres"
                    });
                    <?php
                }
                ?>
            });

            </script>
        </div>
    </div> <!--container-->
    <?php view('inc/footer'); ?>
</body>
</html>
