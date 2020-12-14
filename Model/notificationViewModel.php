<?php
  include('connect.php');
  $query = "SELECT * from notification";
  $result = mysqli_query($con, $query);