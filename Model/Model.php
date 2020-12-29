<?php
  class Model {
    // Create Queries
    public function createOrder() {
      include('connect.php');
      $name = $_SESSION['name'];
      $description = $_SESSION['description'];
      
      $query = "INSERT INTO orders (id, name, description, status) VALUES (NULL, '$name','$description', 'pending')";
      mysqli_query($con, $query);
    }
    public function createUser() {
      include('connect.php');
      $email = $_SESSION['email'];
      $password = $_SESSION['password'];
      $role = $_SESSION['role'];
    
      $query = "INSERT INTO user (email, user_password, role) VALUES ('$email','$password', '$role')";
      mysqli_query($con, $query);
    }

    // Delete Queries
    public function deleteOrder() {
      include('connect.php');
      $id = $_SESSION['id'];
      $query = "DELETE FROM orders WHERE orders.id = '$id'";
      mysqli_query($con, $query);
    }
    public function deleteUser() {
      include('connect.php');
      $id = $_SESSION['id'];
      $query = "DELETE FROM user WHERE user.id = '$id'";
      mysqli_query($con, $query);
    }

    // Edit Query
    public function editOrder() {
      // var_dump($_SESSION);
      include('connect.php');
      $id = $_SESSION['id'];
      $name = $_SESSION['name'];
      $description = $_SESSION['description'];
      $status = $_SESSION['status'];
      $query = "UPDATE orders SET name = '$name', description = '$description', status = '$status' WHERE id = $id";
      mysqli_query($con, $query);
    }
    public function editUser() {
      // var_dump($_SESSION);
      include('connect.php');
      $id = $_SESSION['id'];
      $email = $_SESSION['email'];
      $password = $_SESSION['password'];
      $role = $_SESSION['role'];
      $query = "UPDATE user SET email = '$email', user_password = '$password', role = '$role' WHERE id = $id";
      mysqli_query($con, $query);
    }
    
    // Login Queries
    public function login() {
      session_start();
      // echo "<script type='text/javascript'>alert('Your rating Accepted')</script>";
      include('connect.php');
      $email = $_SESSION['email'];
      $password = $_SESSION['password'];
    
      //User validation
      $user_check_query = "SELECT * FROM user WHERE email = '$email' AND user_password ='$password' LIMIT 1";
      $results = mysqli_query($con, $user_check_query);
      $user = mysqli_fetch_assoc($results);
      return $user;
    }
    
    // View Queries
    public function notificationView() {
      include('connect.php');
      $query = "SELECT * from notification";
      return mysqli_query($con, $query);
    }
    public function orderView() {
      include('connect.php');
      $query = "SELECT * from orders";
      return mysqli_query($con, $query);
    }
    public function userView() {
      include('connect.php');
      $query = "SELECT * from user";
      return mysqli_query($con, $query);
    }
  }