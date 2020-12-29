<?php
  $_SESSION['id'] = $_POST['id'];
  $model->deleteOrder();
  header("Location: ../View/viewOdersManager.php");