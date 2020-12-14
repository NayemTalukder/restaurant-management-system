<?php include("../Controller/userViewController.php"); ?>
<div class="w-80 mx-auto my-5">
    <div style="background-color: #28a745" class="d-flex justify-content-center">
        <h4 class="card-title text-white my-2">User List</h4>
    </div>
    <div class="table-responsive">
        <table class="data-tables table table-striped table-bordered" style="width:100%">
            <thead>
                <tr class="text-center" >
                    <th width="5%">ID</th>
                    <th width="20%">Email</th>
                    <th width="20%">Password</th>
                    <th width="20%">Role</th>
                    <th width="15%">Edit</th>
                    <th width="15%">Delete</th>
                </tr>
            </thead>
            <?php while($rows = mysqli_fetch_assoc($result)) { ?>
                <tr class="text-center">
                    <td style="vertical-align: middle;"><?php echo $rows['id'] ?></td>
                    <td style="vertical-align: middle;"><?php echo $rows['email'] ?></td>
                    <td style="vertical-align: middle;"><?php echo $rows['user_password'] ?></td>
                    <td style="vertical-align: middle;"><?php echo $rows['role'] ?></td>
                    <td style="vertical-align: middle;">
                        <form action="editUser.php" method="post">
                            <input name="id" class="w-100" type="text" value="<?php echo $rows['id'] ?>" style="display: none">
                            <input name="email" class="w-100" type="text" value="<?php echo $rows['email'] ?>" style="display: none">
                            <input name="password" class="w-100" type="text" value="<?php echo $rows['user_password'] ?>" style="display: none">
                            <input name="role" class="w-100" type="text" value="<?php echo $rows['role'] ?>" style="display: none">
                            <button
                            style="cursor: pointer; font-size: 15px;"
                            class="btn btn-outline-success w-100 text-dark edit-item">Edit</button>
                        </form>
                    </td>
                    <td style="vertical-align: middle;">
                        <form action="../Controller/deleteUserController.php" method="post">
                            <input name="id" class="w-100" type="text" value="<?php echo $rows['id'] ?>" style="display: none">
                            <button
                            style="cursor: pointer; font-size: 15px;"
                            class="btn btn-outline-success w-100 text-dark edit-item">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>
