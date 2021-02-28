<?php
session_start();
$username = $_POST['Username'];
$password = $_POST['Password'];
    if ($username == 'staff' && $password == 'staff1236') {
        header("location:staff.html");
    } elseif ($username == 'boss' && $password == 'boss1236') {
        header("location:boss.php");
    } else
    {
        echo "incorrect username and password";
        require "login.html";
    }
?>
