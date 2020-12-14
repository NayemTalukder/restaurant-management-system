<?php
  $_SESSION['name'] = $_POST['name'];
  $_SESSION['description'] = $_POST['description'];
  include("../Model/createOrderModel.php");
  header("Location: ../View/index.php");