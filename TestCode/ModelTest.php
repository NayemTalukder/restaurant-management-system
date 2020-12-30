<?php
  class ModelTest {
    // Create Queries
    public function createOrderTest() {
      include('connect.php');
      if ($_SESSION['dataType'] == 'wrongData') $query = "INSERT INTO orders (id, name, description, status) VALUES (NULL,'', 'Test_Status')";
      else $query = "INSERT INTO orders (id, name, description, status) VALUES (NULL, 'Test_Order','Test_Description', 'Test_Status')";
      return mysqli_query($con, $query);
    }
    public function createUserTest() {
      include('connect.php');
      if ($_SESSION['dataType'] == 'wrongData') $query = "INSERT INTO user (email, user_password, role) VALUES ('Test_Email', 'Test_Role')";
      else $query = "INSERT INTO user (email, user_password, role) VALUES ('Test_Email','Test_Password', 'Test_Role')";
      return mysqli_query($con, $query);
    }
    public function createNotificationTest() {
      include('connect.php');
      if ($_SESSION['dataType'] == 'wrongData') $query = "INSERT INTO notifications (id, name, description) VALUES (NULL, '', '')";
      else $query = "INSERT INTO notification (id, name, description) VALUES (NULL, 'Test_Notification','Test_Description')";
      return mysqli_query($con, $query);
    }

    // Delete Queries
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

    // Edit Query
    public function editOrderTest() {
      include('connect.php');
      if ($_SESSION['dataType'] == 'wrongData') $query = "UPDATE orders SET name = '', description = '', status = '' WHERE orderss.name = 'a'"; 
      else $query = "UPDATE orders SET name = 'Test_Order_Edited', description = 'Test_Description_Edited', status = 'Test_Status_Edited' WHERE orders.name = 'Test_Order'";      
      return mysqli_query($con, $query);
    }
    public function editUserTest() {
      include('connect.php');
      if ($_SESSION['dataType'] == 'wrongData') $query = "UPDATE user SET emaill = '', user_passworddd = '', role = '' WHERE user = ''"; 
      else $query = "UPDATE user SET email = 'Test_Email_Edited', user_password = 'Test_Password_Edited', role = 'Test_Role_Edited' WHERE user.email = 'Test_Email'";      
      return mysqli_query($con, $query);
    }
    
    // Login Query
    public function loginTest() {
      include('connect.php');
      // echo "<script type='text/javascript'>alert('Your rating Accepted')</script>";
      if ($_SESSION['dataType'] == 'wrongData') $query = "SELECT * FROM user WHERE emaill = '' AND user_passwordd ='' LIMIT 1";
      else $query = "SELECT * FROM user WHERE email = 'Test_Email' AND user_password ='Test_Password' LIMIT 1";
      return mysqli_query($con, $query);
    }
    
    // View Queries
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