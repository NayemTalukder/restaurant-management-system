<?php
  include('../Model/Model.php');
  $model = new Model();

  $_SESSION['id'] = $_POST['id'];
  $model->deleteUser();
  header("Location: ../View/index.php");