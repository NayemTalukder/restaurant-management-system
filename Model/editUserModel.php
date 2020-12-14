<?php
  include('connect.php');
  $id = $_SESSION['id'];
  $email = $_SESSION['email'];
  $password = $_SESSION['password'];
  $role = $_SESSION['role'];
  $query = "UPDATE user SET email = '$email', user_password = '$password', role = '$role', WHERE id = $id";
  mysqli_query($con,$query);