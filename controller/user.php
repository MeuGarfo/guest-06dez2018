<?php
$method=getMethod();
if($method=='POST'){
    controller('user-post');
}else{
    controller('user-get');
}
?>
