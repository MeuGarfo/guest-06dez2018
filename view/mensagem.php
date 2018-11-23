<!DOCTYPE html>
<html lang="pt" dir="ltr">
<head>
    <meta charset="utf-8">
    <title><?php print $mensagem['name']; ?></title>
    <?php view('inc/header'); ?>
</head>
<body>
    <?php view('inc/navOffline'); ?>
    <div class="container">
        <div class="span12">
            <?php
            $id=$mensagem['id'];
            print '<b>'.$mensagem['name'].'</b><hr>';
            view('menu/mensagem',['id'=>$id]);
            print '<h1>'.$mensagem['msg'].'</h1>';
            $data=date('r',$mensagem['created_at']);
            print '<small>'.$data.'</small>';
            ?>
        </div>
    </div> <!--container-->
    <?php view('inc/footer'); ?>
</body>
</html>
