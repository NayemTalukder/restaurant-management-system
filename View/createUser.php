<?php include('header.php') ?>

<div class="w-50 mx-auto my-5 ">
    <div style="background-color: #28a745" class="d-flex justify-content-center">
        <h4 class="card-title text-white my-2">Create User</h4>
    </div>
    <form class="mt-4 form-text" action="../Controller/createUserController.php"  method="POST" >
      <div class="">
          <div class="form-group">
            <label for="email" class="text-dark" >Email</label>
            <input type="email" name="email" class="form-control" placeholder="email" >
          </div>
          <div class="form-group">
            <label for="password" class="text-dark" >Password</label>
            <input type="password" name="password" class="form-control" placeholder="password" >
          </div>
          <div class="form-group">
            <label for="password" class="text-dark" >Role</label>
            <input type="text" name="role" class="form-control" placeholder="role" >
          </div>
      </div>
      <div class="sign-info text-center">
          <button type="submit" class="btn btn-dark d-block w-100 mb-2 text-white">Create</button>
      </div>
    </form>
</div>

<?php include('footer.php') ?>