<?php
    session_start();
    include('../Controller/controller.php');
    if (!isset($_SESSION['method'])) $_SESSION['method'] = 'not-set';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
        <script src="https://kit.fontawesome.com/662a8fa5cc.js" ></script>
        <link rel="stylesheet" href="css/styles.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
        <title>Restaurant Management System</title>
    </head>
        
<?php 
    if (isset($_SESSION['loggedIn'])) {
        echo '<body>';
        include('nav.php');
    } else echo '<body class="bg-dark">';
?>

