<?php
  $_SESSION['id'] = $_POST['id'];
  include("../Model/deleteUserModel.php");
  header("Location: ../View/index.php");