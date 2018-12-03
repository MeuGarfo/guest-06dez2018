<?php
$method=getMethod();
if($method=='POST'){
    controller('signup-post');
}else{
    view('signup');
}
?>
