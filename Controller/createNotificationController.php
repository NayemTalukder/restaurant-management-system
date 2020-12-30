<?php
  session_start();
  include('controller.php');
  $_SESSION['name'] = $_POST['name'];
  $_SESSION['description'] = $_POST['description'];
  $model->createNotification();
  header("Location: ../View/sendNotification.php");