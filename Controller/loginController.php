<?php 
session_start();

$_SESSION['email'] = $_POST['email'];

$_SESSION['password'] = $_POST['password'];

header("Location: ../Model/loginModel.php");
return;
?>
