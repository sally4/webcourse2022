<?php
if($_SERVER('REQUEST_METHOD')=='POST'){
$email=$_POST('email');
$password=$_POST('password');
if(isset($_POST[$password])){
    $agree=true;
}else{
    $agree=false;
}

}




?>