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
            <h1>Banner  Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Banner</li>
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
                <h3 class="card-title">Add Banner Image</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php
$result = $db_handle->runQuery("select * from banner where id='".$_REQUEST['id']."'");
foreach($result as $row) { ?> 
              <form action="bannerupdate.php" enctype="multipart/form-data" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputFile">Banner Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlFile1" >Banner Image</label>
                            <img src="<?php echo $row['banner'];?>"style="width:100px;height:100px;"> 
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