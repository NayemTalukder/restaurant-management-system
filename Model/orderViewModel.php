<?php
  include('connect.php');
  $query = "SELECT * from orders";
  $result = mysqli_query($con, $query);