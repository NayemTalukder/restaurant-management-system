<?php
  include('connect.php');
  $name = $_SESSION['name'];
  $description = $_SESSION['description'];

  $query = "INSERT INTO orders (name, description, status) VALUES ('$name','$description', 'pending)";
  mysqli_query($con,$query);