<?php
    session_start();
    // if(isset($_SESSION['username'])){
        unset($_SESSION['loggedIn']);
        header("Location: ../View/index.php");
    // }
?>