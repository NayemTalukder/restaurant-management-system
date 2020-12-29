<?php
  session_start();
  include('controller.php');
  $_SESSION['id'] = $_POST['id'];
  $model->deleteUser();
  header("Location: ../View/index.php");