<nav style="background-color: #28a745" class="navbar bg-header navbar-expand-sm">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand mr-auto text-white" href="index.php">RMS</a>
        <div class="collapse navbar-collapse ml-4" id="Navbar">
        <ul class="navbar-nav mr-auto">
            <li class="nav-link"><a class="nav-link text-white" href="index.php"><i class="fa fa-home mr-1"></i>Home</a></li>
            <?php
              if ($_SESSION['role'] === 'Manager') {
                echo '<li class="nav-link"><a class="nav-link text-white" href="viewOdersManager.php"><i class="fas fa-utensils mr-2"></i>View Orders</a></li>';
                echo '<li class="nav-link"><a class="nav-link text-white" href="createUser.php"><i class="fas fa-user-edit mr-2"></i>Create User</a></li>';
                
                echo '<li class="nav-link"><a class="nav-link text-white" href="sendNotification.php"><i class="fas fa-bell mr-2"></i>Send Notification</a></li>';
              }
              
              if ($_SESSION['role'] === 'Manager' || $_SESSION['role'] === 'Waiter') {
                echo '<li class="nav-link"><a class="nav-link text-white" href="createOrder.php"><i class="fas fa-edit mr-2"></i>Create Order</a></li>';
              }
              if ($_SESSION['role'] === 'Waiter' || $_SESSION['role'] === 'Chef') {
                echo '<li class="nav-link"><a class="nav-link text-white" href="viewNotification.php"><i class="fas fa-bell mr-2"></i>Notifications</a></li>';
              }
            ?>
        </ul>
        <span class="navbar-text mr-3">
           <span class="mr-1 text-white">Role :</span>
           <span class="text-white"><?php echo $_SESSION['role'] ?></span>
        </span>
        <span class="navbar-text">
            <a class="text-white" href="../Controller/logoutController.php" >
            <span class="fa fa-sign-in mr-1 "></span> Log Out</a>
        </span>
        </div>
    </div>
</nav>