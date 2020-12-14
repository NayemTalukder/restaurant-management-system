<?php
  $_SESSION['email'] = $_POST['email'];
  $_SESSION['password'] = $_POST['password'];
  $_SESSION['role'] = $_POST['role'];
  include("../Model/createUserModel.php");
  header("Location: ../View/index.php");