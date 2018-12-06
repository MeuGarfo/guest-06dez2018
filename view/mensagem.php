<!DOCTYPE html>
<html lang="pt" dir="ltr">
<head>
    <meta charset="utf-8">
    <title><?php e($mensagem['name']); ?></title>
    <?php view('inc/header'); ?>
</head>
<body>
    <?php view('inc/navOffline'); ?>
    <div class="container">
        <div class="span12">
            <?php
            print '<b>';
            e($mensagem['name']);
            print '</b><hr>';
            view('menu/mensagem',['user'=>$user,'mensagem'=>$mensagem]);
            print '<h1>';
            e($mensagem['msg']);
            print '</h1>';
            $data=date('r',$mensagem['created_at']);
            print '<small>'.$data.'</small>';
            ?>
        </div>
    </div> <!--container-->
    <?php view('inc/footer'); ?>
</body>
</html>
