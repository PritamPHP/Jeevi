<?php
error_reporting(0);
include('include/header.php');
?>
               <!-- Content Wrapper. Contains page content -->
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
              <form action="bannersave.php" enctype="multipart/form-data" method="post">
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
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="upload" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>

          </div>
</div>
</div>
</section>
</div>

    
    <?php include ('include/footer.php') ?>