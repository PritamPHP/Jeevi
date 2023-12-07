<?php include('include/header.php');
if ($_GET['delete']) {

    // $id = $_GET['delete'];

    //this not run
    // $res = $db_handle->runQuery("DELETE FROM client_intake_form_data WHERE id=$id");

    $sql = "DELETE FROM `client_intake_form_data` WHERE `id` = {$_GET['delete']} ;";

    if (mysqli_query($db_handle->connectDB(), $sql)) {
        echo '<script>alert("Deleted successfully"); 
          window.location.href="client-intake-form-show.php";</script>';
    } else {
        echo '<script>alert("Client intake form is not delete because error in server side")</>';
    }

}
?>
<style>
    .truncate-text {
        max-width: 200px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        transition-delay: 1s;
    }
</style>
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
                        <li class="breadcrumb-item"><a href="#">Client intake form data</a></li>
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
                                        <th>Full Name </th>
                                        <th>Organization</th>
                                        <th>Position/Role</th>
                                        <th>Email</th>
                                        <th>Phone No.</th>
                                        <th>Describe Challenges</th>
                                        <th>Interested</th>
                                        <th>Hear About</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    $result = $db_handle->runQuery("select * from client_intake_form_data ");
                                    foreach ($result as $row) { ?>

                                        <td>
                                            <?php echo $i; ?>
                                        </td>

                                        <td>
                                            <?php echo $row['id']; ?>
                                        </td>

                                        <td>
                                            <?php echo $row['full_name']; ?>
                                        </td>

                                        <td>
                                            <?php echo $row['organization_name']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['position_role']; ?>
                                        </td>

                                        <td>
                                            <?php echo $row['email']; ?>
                                        </td>

                                        <td>
                                            <?php echo $row['phone']; ?>
                                        </td>

                                        <td class="description-cell">
                                            <div class="truncate-text" data-toggle="tooltip" data-placement="top"
                                                title="<?php echo $row['describe_challenges']; ?>">
                                                <?php echo $row['describe_challenges']; ?>
                                            </div>
                                        </td>

                                        <td>
                                            <?php echo $row['interested']; ?>
                                        </td>

                                        <td>
                                            <?php echo $row['hear_about']; ?>
                                        </td>

                                        <td>
                                            <a href="?delete=<?php echo $row['id']; ?>"
                                                onclick="return confirm('Are you sure you want to delete id  <?php echo $row['id']; ?> form ?');">
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
                                        <th>Full Name </th>
                                        <th>Organization</th>
                                        <th>Position/Role</th>
                                        <th>Email</th>
                                        <th>Phone No.</th>
                                        <th>Describe Challenges</th>
                                        <th>Interested</th>
                                        <th>Hear About</th>
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