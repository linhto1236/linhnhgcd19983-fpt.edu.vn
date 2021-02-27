<?php
session_start();
$username = $_POST['Username'];
$password = $_POST['Password'];
    if ($username == 'admin' && $password == '123') {
        header("location:staff.html");
    } elseif ($username == 'boss' && $password == '123') {
        header("location:boss.php");
    } else
    {
        echo "incorrect username and password";
        require "login.html";
    }
?>
