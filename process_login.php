<?php

session_start(); //Deklarasi memulai session
include 'connection.php';

$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * FROM login WHERE username = '$username'
          AND password = '$password'";

        //   variable conn di import dari connection.php
$result = mysqli_query($conn,$query);
$user = mysqli_fetch_assoc($result);

if($user){
    $_SESSION["username"] = $user["username"];
    header('Location: home.php');
}else{
    echo '<script>alert("login gagal");</script>';
    echo '<script>window.location="index.php";</script>';
}

?>