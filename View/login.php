<div class="sign-in-form bg-primary rounded mx-auto">
  <h3 class="mb-0 text-center text-white">Sign In</h3>
    <form class="mt-4 form-text" action="../Controller/loginController.php"  method="POST" >
      <div class="form-group">
        <label for="email" class="text-white" >Email</label>
        <input type="email" name="email" class="form-control" placeholder="email" >
      </div>
      <div class="form-group">
        <label for="password" class="text-white" >Password</label>
        <input type="password" name="password" class="form-control" placeholder="password" >
      </div>
      <div class="sign-info text-center">
          <button type="submit" class="btn btn-dark d-block w-100 mb-2 text-white">Sign In</button>
      </div>
    </form>
</div>