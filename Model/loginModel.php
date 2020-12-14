<?php 
  session_start();
  // echo "<script type='text/javascript'>alert('Your rating Accepted')</script>";
  include('connect.php');
  $email = $_SESSION['email'];
  $password = $_SESSION['password'];

  //User validation
  $user_check_query = "SELECT * FROM user WHERE email = '$email' AND user_password ='$password' LIMIT 1";
  $results = mysqli_query($con, $user_check_query);
  $user = mysqli_fetch_assoc($results);
  
  //Confirmation
  if($user){
    $_SESSION['role'] = $user['role'];
    $_SESSION['loggedIn'] = true;
    header("Location: ../View/index.php");
  }else{
    header("Location: ../View/index.php");
  }
  return;
 ?>