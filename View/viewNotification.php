<?php include('header.php'); ?>
<?php include("../Controller/notificationViewController.php"); ?>
<div class="w-80 mx-auto my-5">
    <div style="background-color: #28a745" class="d-flex justify-content-center">
        <h4 class="card-title text-white my-2">Notification List</h4>
    </div>
    <div class="table-responsive">
        <table class="data-tables table table-striped table-bordered" style="width:100%">
            <thead>
                <tr class="text-center" >
                    <th width="5%">ID</th>
                    <th width="20%">Name</th>
                    <th width="20%">Description</th>
                </tr>
            </thead>
            <?php while($rows = mysqli_fetch_assoc($result)) { ?>
                <tr class="text-center">
                    <td style="vertical-align: middle;"><?php echo $rows['id'] ?></td>
                    <td style="vertical-align: middle;"><?php echo $rows['name'] ?></td>
                    <td style="vertical-align: middle;"><?php echo $rows['description'] ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>
<?php include('footer.php') ?>