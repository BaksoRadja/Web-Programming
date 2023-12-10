<?php
include_once("../models/Users.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = new User();
    $login = $user->login($_POST['username'], $_POST['password']);

    if ($login){
        echo '<script>alert("Login successful! Welcome back.");</script>';
        header('Location: index.php');
        exit();
    } else{
        echo '<script>alert("Username atau Password salah!!!");</script>';
        header('Location: ../src/pages/register.php');
        exit();
    }
}

?>