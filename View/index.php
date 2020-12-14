<?php include('header.php') ?>

<?php
    if (isset($_SESSION['loggedIn'])) {
        if ($_SESSION['role'] === 'Manager') {
            include('viewUsers.php');
        } else include('viewOders.php');
        include('footer.php');
    } else include('login.php');
?>

