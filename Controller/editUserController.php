<?php
  $_SESSION['id'] = $_POST['id'];
  $_SESSION['email'] = $_POST['email'];
  $_SESSION['password'] = $_POST['password'];
  $_SESSION['role'] = $_POST['role'];
  include("../Model/editUserModel.php");
  header("Location: ../View/index.php");