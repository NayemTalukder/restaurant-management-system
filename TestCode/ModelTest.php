<?php
  class ModelTest {
    public function createOrderTest() {
      include('connect.php');
      if ($_SESSION['dataType'] == 'wrongData') $query = "INSERT INTO orders (id, name, description, status) VALUES (NULL,'', 'pending')";
      else $query = "INSERT INTO orders (id, name, description, status) VALUES (NULL, 'Test_Order','Test_Description', 'pending')";
      return mysqli_query($con, $query);
    }
    public function createUserTest() {
      include('connect.php');
      if ($_SESSION['dataType'] == 'wrongData') $query = "INSERT INTO user (email, user_password, role) VALUES ('Test_Email', 'Test_Role')";
      else $query = "INSERT INTO user (email, user_password, role) VALUES ('Test_Email','Test_Password', 'Test_Role')";
      return mysqli_query($con, $query);
    }
    public function deleteOrderTest() {
      include('connect.php');
      if ($_SESSION['dataType'] == 'wrongData') $query = "DELETE FROM orders WHERE orders = 'Test_Order'";
      else $query = "DELETE FROM orders WHERE orders.name = 'Test_Order'";
      return mysqli_query($con, $query);
    }
    public function deleteUserTest() {
      include('connect.php');
      if ($_SESSION['dataType'] == 'wrongData') $query = "DELETE FROM user WHERE user = 'Test_Email'";
      else $query = "DELETE FROM user WHERE user.email = 'Test_Email'";
      return mysqli_query($con, $query);
    }
    public function editUserTest() {
      include('connect.php');
      if ($_SESSION['dataType'] == 'wrongData') $query = "UPDATE user SET emaill = '', user_passworddd = '', role = '' WHERE user = ''"; 
      else $query = "UPDATE user SET email = 'Test_Email_Edited', user_password = 'Test_Password_Edited', role = 'Test_Role_Edited' WHERE user.email = 'Test_Email'";      
      return mysqli_query($con, $query);
    }
    public function loginTest() {
      include('connect.php');
      // echo "<script type='text/javascript'>alert('Your rating Accepted')</script>";
      if ($_SESSION['dataType'] == 'wrongData') $query = "SELECT * FROM user WHERE emaill = '' AND user_passwordd ='' LIMIT 1";
      else $query = "SELECT * FROM user WHERE email = 'Test_Email' AND user_password ='Test_Password' LIMIT 1";
      return mysqli_query($con, $query);
    }
    public function notificationViewTest() {
      include('connect.php');
      if ($_SESSION['dataType'] == 'wrongData') $query = "SELECT * from notificationnn";
      else $query = "SELECT * from notification";
      return mysqli_query($con, $query);
    }
    public function orderViewTest() {
      include('connect.php');
      if ($_SESSION['dataType'] == 'wrongData') $query = "SELECT * from ordersss";
      else $query = "SELECT * from orders";
      return mysqli_query($con, $query);
    }
    public function userViewTest() {
      include('connect.php');
      if ($_SESSION['dataType'] == 'wrongData') $query = "SELECT * from userr";
      else $query = "SELECT * from user";
      return mysqli_query($con, $query);
    }
  }