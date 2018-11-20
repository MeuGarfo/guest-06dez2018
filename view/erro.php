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
        <h1><?php print $title; ?></h1>
        <p><?php print $msg; ?></p>
        <p><a href="javascript:history.back();">Voltar</a></p>
    </div> <!--container-->
    <?php view('inc/footer'); ?>
</body>
</html>
