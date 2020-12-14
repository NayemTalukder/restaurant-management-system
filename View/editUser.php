<?php include('header.php') ?>

<div class="w-50 mx-auto my-5 ">
    <div style="background-color: #28a745" class="d-flex justify-content-center">
        <h4 class="card-title text-white my-2">Edit User</h4>
    </div>
    <form class="mt-4 form-text" action="../Controller/editUserController.php" method="POST" >
        <div class="form-group">
          <label for="email" class="text-dark" >Email</label>
          <input type="email" name="email" class="form-control" value="<?php echo $_POST['email'] ?>" >
        </div>
        <div class="form-group">
          <label for="password" class="text-dark" >Password</label>
          <input type="password" name="password" class="form-control" value="<?php echo $_POST['password'] ?>" >
        </div>
        <div class="form-group">
          <label for="password" class="text-dark" >Role</label>
          <input type="text" name="role" class="form-control" value="<?php echo $_POST['role'] ?>" >
        </div>
      <div class="sign-info text-center">
          <button type="submit" class="btn btn-dark d-block w-100 mb-2 text-white">Edit</button>
      </div>
    </form>
</div>

<?php include('footer.php') ?>