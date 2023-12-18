<?php include('include/header.php');
if ($_GET['delete']) {


    $sql = "DELETE FROM `payment` WHERE `id` = {$_GET['delete']} ;";

    if (mysqli_query($db_handle->connectDB(), $sql)) {
        echo '<script>alert("Deleted successfully"); 
          window.location.href="payment.php";</script>';
    } else {
        echo '<script>alert("this is not delete because error in server side")</>';
    }

}
?>
<!-- Content Header (Page header) -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>DataTables</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Payment Information</a></li>
                        <li class="breadcrumb-item active">DataTables</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Id</th>
                                        <th>Name </th>
                                        <th>Email</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    $result = $db_handle->runQuery("select * from payment ");
                                    foreach ($result as $row) { ?>

                                        <td>
                                            <?php echo $i; ?>
                                        </td>

                                        <td>
                                            <?php echo $row['id']; ?>
                                        </td>

                                        <td>
                                            <?php echo $row['name']; ?>
                                        </td>

                                        <td>
                                            <?php echo $row['email']; ?>
                                        </td>

                                        <td>
                                            <?php echo $row['amount']; ?>
                                        </td>

                                        <td>
                                            <?php
                                            if ($row['status'] === '0') {
                                                echo '<p class="text-warning">pending<p>';
                                            } else if ($row['status'] === '1') {
                                                echo '<p class="text-success">success<p>';
                                            } else if ($row['status'] === '2') {
                                                echo '<p class="text-danger">cancelled<p>';
                                            } else {
                                                echo '<p class="text-danger">failed<p>';
                                            }
                                            ?>
                                        </td>

                                        <td>
                                            <a href="?delete=<?php echo $row['id']; ?>"
                                                onclick="return confirm('Are you sure you want to delete id  <?php echo $row['id']; ?> data ?');">
                                                <button class="btn btn-danger btn-xl">Delete</button></a>

                                        </td>
                                        </tr>
                                        <?php $i++;
                                    } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Id</th>
                                        <th>Name </th>
                                        <th>Email</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
    </section>
    <!-- /.card-body -->
</div>
</div>
<?php include('include/footer.php') ?>