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
              <form action="contactsave.php" enctype="multipart/form-data" method="post">
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Location</label>
                    <input type="text" class="form-control" name="location" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                    <label for="exampleFormControlTextarea1">E mail</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>
                    </div>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputFile">Mobile Number</label>
                    <div class="input-group">
                      <div class="custom-file">
                      <input type="text"  maxlength="12" class="form-control" name="mobilenumber" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <!-- <label class="custom-file-label" for="exampleInputFile">Choose file</label> -->
                      </div>  
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