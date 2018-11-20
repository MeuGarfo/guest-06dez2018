<?php
$method=getMethod();
if($method=='POST'){
    controller('mensagem-post');
}else{
    controller('mensagem-get');
}
?>
