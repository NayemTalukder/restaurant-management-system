<?php
  include('connect.php');
  $id = $_SESSION['id'];
  $query = "DELETE FROM user WHERE user.id = '$id'";
  mysqli_query($con,$query);