<?php 
  session_start();
  include('controller.php');
  $_SESSION['email'] = $_POST['email'];
  $_SESSION['password'] = $_POST['password'];
  $user = $model->login();
  //Confirmation
  if($user){
    $_SESSION['role'] = $user['role'];
    $_SESSION['loggedIn'] = true;
    header("Location: ../View/index.php");
  }else{
    header("Location: ../View/index.php");
  }
  return;
?>
