<?php include('include/header.php');
if ($_GET['delete']) {


    $sql = "DELETE FROM `family_flourish_form` WHERE `id` = {$_GET['delete']} ;";

    if (mysqli_query($db_handle->connectDB(), $sql)) {
        echo '<script>alert("Deleted successfully"); 
          window.location.href="Family-Flourish-Form-show.php";</script>';
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
                        <li class="breadcrumb-item"><a href="#">Family Flourish Form</a></li>
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
                                        <th>Full Name</th>
                                        <th>Residence Suburb</th>
                                        <th>Email</th>
                                        <th>Phone No</th>
                                        <th>Age</th>
                                        <th>Is your partner aware that you are filling out this form ? </th>
                                        <th>Is your partner willing to attend this session with you ? </th>
                                        <th>Do you prefer to participate in this session alone or with your partner ?
                                        </th>
                                        <th>Number of Family Members </th>
                                        <th>Names and Ages of Each Family Member </th>
                                        <th>Challenges Faced by the Family </th>
                                        <th>Preferred method of contact </th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    $result = $db_handle->runQuery("select * from family_flourish_form ");
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
                                            <?php echo $row['residence_suburb']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['email']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['phone_no']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['age']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['partner_aware_you_filling_form']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['partner_willing_to_attend_session']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['participate_session_alone']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['number_of_family_members']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['names_and_ages_family_member']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['challenges_faced_by_the_family']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['preferred_contact']; ?>
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
                                        <th>Full Name</th>
                                        <th>Residence Suburb</th>
                                        <th>Email</th>
                                        <th>Phone No</th>
                                        <th>Age</th>
                                        <th>Is your partner aware that you are filling out this form ? </th>
                                        <th>Is your partner willing to attend this session with you ? </th>
                                        <th>Do you prefer to participate in this session alone or with your partner ?
                                        </th>
                                        <th>Number of Family Members </th>
                                        <th>Names and Ages of Each Family Member </th>
                                        <th>Challenges Faced by the Family </th>
                                        <th>Preferred method of contact </th>
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