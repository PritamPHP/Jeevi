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
            <h1>hello Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">hello</li>
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
                <h3 class="card-title">Add hello Image</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php
$result = $db_handle->runQuery("select * from hello where id='".$_REQUEST['id']."'");
foreach($result as $row) { ?> 
              <form action="helloupdate.php" enctype="multipart/form-data" method="post">
                <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Heading</label>
                    <input type="text" value="<?php echo $row['heading']?>" class="form-control" name="heading" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="5"><?php echo $row['description']?></textarea>
                    </div>
                    </div>
                    </div>
                  <div class="form-group"> 
                    <label for="exampleInputFile">hello Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlFile1" >hello Image</label>
                            <img src="<?php echo $row['image'];?>"style="width:100px;height:100px;"> 
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