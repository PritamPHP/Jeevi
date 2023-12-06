<?php
error_reporting(0);
include('include/header.php');
?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>contact Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">contact</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
    
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form 1elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add contact Image</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php
$result = $db_handle->runQuery("select * from contact where id='".$_REQUEST['id']."'");
foreach($result as $row) { ?> 
              <form action="contactupdate.php" enctype="multipart/form-data" method="post">
                <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Location</label>
                    <input type="text" value="<?php echo $row['location']?>" class="form-control" name="location" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                    <label for="exampleFormControlTextarea1">E mail</label>
                    <input type="email" value="<?php echo $row['email']?>" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    </div>
                    </div>
                    <div class="form-group">
                    <label for="exampleFormControlTextarea1">Mobile Number</label>
                    <input type="text" value="<?php echo $row['mobilenumber']?>" class="form-control" name="mobilenumber" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                  <div class="form-group">
                    <!-- <label for="exampleFormControlFile1" >about Image</label> -->
                            <!-- <img src=""style="width:100px;height:100px;">  -->
                    </div>
                </div>

                <!-- /.card-body -->
                <div class="card-footer">
                <input type="hidden" name="update_id" value="<?php echo $_REQUEST['id'];?>">

                  <button type="submit" name="upload" class="btn btn-primary">Submit</button>
                </div>
              </form>
              <?php }  ?>
                    
            </div>

          </div>
</div>
</div>
</section>
</div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>