<?php include("../Controller/orderViewController.php"); ?>
<div class="w-80 mx-auto my-5">
    <div style="background-color: #28a745" class="d-flex justify-content-center">
        <h4 class="card-title text-white my-2">Order List</h4>
    </div>
    <div class="table-responsive">
        <table class="data-tables table table-striped table-bordered" style="width:100%">
            <thead>
                <tr class="text-center" >
                    <th width="5%">ID</th>
                    <th width="20%">Name</th>
                    <th width="20%">Description</th>
                    <th width="20%">Status</th>
                    <th width="15%">Edit</th>
                    <th width="15%">Delete</th>
                </tr>
            </thead>
            <?php while($rows = mysqli_fetch_assoc($result)) { ?>
                <tr class="text-center">
                    <td style="vertical-align: middle;"><?php echo $rows['id'] ?></td>
                    <td style="vertical-align: middle;"><?php echo $rows['name'] ?></td>
                    <td style="vertical-align: middle;"><?php echo $rows['description'] ?></td>
                    <td style="vertical-align: middle;"><?php echo $rows['status'] ?></td>
                    <td style="vertical-align: middle;">
                        <form action="editOrder.php" method="post">
                            <input name="id" class="w-100" type="text" value="<?php echo $rows['id'] ?>" style="display: none">
                            <input name="name" class="w-100" type="text" value="<?php echo $rows['name'] ?>" style="display: none">
                            <input name="description" class="w-100" type="text" value="<?php echo $rows['description'] ?>" style="display: none">
                            <input name="status" class="w-100" type="text" value="<?php echo $rows['status'] ?>" style="display: none">
                            <button
                            style="cursor: pointer; font-size: 15px;"
                            class="btn btn-outline-success w-100 text-dark edit-item">Edit</button>
                        </form>
                    </td>
                    <td style="vertical-align: middle;">
                        <form action="../Controller/deleteOrderController.php" method="post">
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