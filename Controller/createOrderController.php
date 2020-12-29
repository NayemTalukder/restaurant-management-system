<?php
  session_start();
  include('controller.php');
  $_SESSION['name'] = $_POST['name'];
  $_SESSION['description'] = $_POST['description'];
  $model->createOrder();
  header("Location: ../View/index.php");