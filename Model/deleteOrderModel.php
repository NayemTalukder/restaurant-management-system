<?php
  include('connect.php');
  $id = $_SESSION['id'];
  $query = "DELETE FROM orders WHERE orders.id = '$id'";
  mysqli_query($con,$query);