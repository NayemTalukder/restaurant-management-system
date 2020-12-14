<?php
  $_SESSION['id'] = $_POST['id'];
  include("../Model/deleteOrderModel.php");
  header("Location: ../View/viewOdersManager.php");