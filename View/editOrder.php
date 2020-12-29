<?php include('header.php') ?>

<div class="w-50 mx-auto my-5 ">
    <div style="background-color: #28a745" class="d-flex justify-content-center">
        <h4 class="card-title text-white my-2">Edit Order</h4>
    </div>
    <form class="mt-4 form-text" action="../Controller/editOrderController.php" method="POST" >
        <input name="id" class="w-100" type="text" value="<?php echo $_POST['id'] ?>" style="display: none">
        <div class="form-group">
          <label for="name" class="text-dark" >Name</label>
          <input type="text" name="name" class="form-control" value="<?php echo $_POST['name'] ?>" >
        </div>
        <div class="form-group">
          <label for="description" class="text-dark" >Description</label>
          <textarea name="description" class="form-control" ><?php echo $_POST['description'] ?></textarea>
        </div>
        <div class="form-group">
          <label for="status" class="text-dark" >Status</label>
          <input type="text" name="status" class="form-control" value="<?php echo $_POST['status'] ?>" >
        </div>
      <div class="sign-info text-center">
          <button type="submit" class="btn btn-dark d-block w-100 mb-2 text-white">Edit</button>
      </div>
    </form>
</div>

<?php include('footer.php') ?>