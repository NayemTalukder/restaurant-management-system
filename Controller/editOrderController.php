<?php
  session_start();
  include('controller.php');
  $_SESSION['id'] = $_POST['id'];
  $_SESSION['name'] = $_POST['name'];
  $_SESSION['description'] = $_POST['description'];
  $_SESSION['status'] = $_POST['status'];
  $model->editOrder();
  if ($_SESSION['role'] == 'Manager') header("Location: ../View/viewOdersManager.php");
  else header("Location: ../View/index.php");