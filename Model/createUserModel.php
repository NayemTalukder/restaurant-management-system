<?php
  include('connect.php');
  $email = $_SESSION['email'];
  $password = $_SESSION['password'];
  $role = $_SESSION['role'];

  $query = "INSERT INTO user (email, user_password, role) VALUES ('$email','$password', '$role')";
  mysqli_query($con,$query);