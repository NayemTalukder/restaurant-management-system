<?php
  session_start();
  include('controller.php');
  
  $_SESSION['status'] = false;
  $_SESSION['method'] = $_POST['method'];
  $_SESSION['dataType'] = $_POST['dataType'];
  $_SESSION['flag'] = true;
  
  if($_SESSION['method'] == 'createOrder') $_SESSION['status'] = $modelTest->createOrderTest();
  else if($_SESSION['method'] == 'createUser') $_SESSION['status'] = $modelTest->createUserTest();
  else if($_SESSION['method'] == 'deleteOrder') $_SESSION['status'] = $modelTest->deleteOrderTest();
  else if($_SESSION['method'] == 'deleteUser') $_SESSION['status'] = $modelTest->deleteUserTest();
  else if($_SESSION['method'] == 'editUser') $_SESSION['status'] = $modelTest->editUserTest();
  else if($_SESSION['method'] == 'login') $_SESSION['status'] = $modelTest->loginTest();
  else if($_SESSION['method'] == 'notificationView') $_SESSION['status'] = $modelTest->notificationViewTest();
  else if($_SESSION['method'] == 'orderView') $_SESSION['status'] = $modelTest->orderViewTest();
  else if($_SESSION['method'] == 'userView') $_SESSION['status'] = $modelTest->userViewTest();

  header("Location: ../View/Test.php");