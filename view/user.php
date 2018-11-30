<!DOCTYPE html>
<html lang="pt" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Lista de usuários</title>
    <?php view('inc/header'); ?>
</head>
<body>
    <?php view('inc/navOnline',$data); ?>
    <div class="container">
        <div class="row">
            <div class="span12">
                <table class="table table-striped">
                    <?php
                    if($users){
                        print '<thead>';
                        print '<tr>';
                        print '<th>Nome</th>';
                        print '<th>Nivel</th>';
                        print '<th>Opções</th>';
                        print '</tr>';
                        print '</thead>';
                        print '<tbody>';
                        foreach ($users as $user) {
                            print '<tr>';
                            print '<td>'.$user['name'].'</td>';
                            print '<td>'.$user['type'].'</td>';
                            print '<td>botões</td>';
                            print '</tr>';
                        }
                        print '</tbody>';
                    }
                    ?>
                </table>
            </div>
        </div>
    </div> <!--container-->
    <?php view('inc/footer'); ?>
</body>
</html>
