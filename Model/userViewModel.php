<?php
  include('connect.php');
  $query = "SELECT * from user";
  $result = mysqli_query($con, $query);