<?php
session_start();
$username = "";
if(isset($_SESSION['username'])){
    //sudah login, set usernam ke session
    $username = $_SESSION['username'];
}else{
    //tidak login, redirect ke index.php
    header('Location:index.php');
}

?>