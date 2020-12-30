<?php 
  include('header.php');
  if(isset($_SESSION['flag']) && !$_SESSION['flag']) {
    $_SESSION['method'] = 'not-set';
  } else $_SESSION['flag'] = false;
?>

<div class="w-60 mx-auto border" style="margin: 74px 0">
  <div style="background-color: #28a745" class="d-flex justify-content-center">
    <h4 class="card-title text-white my-2">Unit Testing</h4>
  </div>
  <div class="mx-auto w-80 my-5" >
    <form class="mt-2 mx-auto" action="../Controller/TestController.php" method="POST">
      <label class="mr-3 font-20" for="methods">Select a Method From Class <span class="btn btn-success ml-3" > ModelTest</span></label>
      <select class="btn btn-outline-success w-40 float-right" name="method" id="methods">
        <option value="createOrder">createOrder</option>
        <option value="createUser">createUser</option>
        <option value="createNotification">createNotification</option>
        <option value="deleteOrder">deleteOrder</option>
        <option value="deleteUser">deleteUser</option>
        <option value="editOrder">editOrder</option>
        <option value="editUser">editUser</option>
        <option value="login">login</option>
        <option value="notificationView">notificationView</option>
        <option value="orderView">orderView</option>
        <option value="userView">userView</option>
      </select>
      <div class="mx-auto">
        <label class="mr-4 font-20" for="methods">Test With</label>
        <select class="btn btn-outline-success w-40" name="dataType" >
          <option value="correctData">Correct Data</option>
          <option value="wrongData">Wrong Data</option>
        </select>
        <input class="btn btn-success float-right w-40" type="submit" value="Test">  
      </div>
    </form>
    <!-- Result -->
    <div class="border mt-4 h-200 <?php if ($_SESSION['method'] == 'not-set') echo 'd-none' ?>" >
      <div style="background-color: #28a745" class="d-flex justify-content-center">
        <h4 class="card-title text-white my-2">Test Result</h4>
      </div>
      <div class="my-4 w-80 mx-auto">
        <h5>Tested Method: <span class="btn btn-success" > <?php echo $_SESSION['method'] ?> </span></h5>
        <h5>Status: 
          <?php 
            if($_SESSION['status']) echo '<span class="btn btn-success" >success</span>';
            else echo '<span class="btn btn-danger" >failed</span>'; ?>
        </h5>
      </div>
    </div>
  </div>
</div>
<?php include('footer.php'); ?>