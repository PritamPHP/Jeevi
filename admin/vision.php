<?php include ('include/header.php');
if($_GET['delete']) { 

  $id = $_GET['delete'];

 $res = $db_handle->runQuery("DELETE FROM vision WHERE id=$id");


 echo '<script>alert(" Deleted successfully"); 
 window.location.href="vision.php";</script>';

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
              <li class="breadcrumb-item"><a href="#">vision</a></li>
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
              <div class="card-header">
                <h3 class="card-title">Add vision Image</h3>
                   <a href="visionAdd.php"><button type="button" class="btn btn-primary" style="float: right; width: 10%;">
                                Add
                              </button></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Heading</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  $i = 1;
$result = $db_handle->runQuery("select * from vision ");
foreach($result as $row) { ?>
                    
                    <td ><?php echo $i;?></td>

					<td><?php echo $row['heading']; ?></td>
					<td><?php echo $row['description']; ?></td>
          <td ><img src="<?php echo $row['image'];?>"style="width:100px;height:100px;"></td>

                    <td>
                      <a href="visionedit.php?id=<?php echo $row['id']; ?>"> <button class="btn  btn-xl btn-success">Edit</button></a>
                      <a href="?delete=<?php echo $row['id'];?>">
                       <button class="btn btn-danger btn-xl">Delete</button></a>
                      
                      
                    </td>
                  </tr>
<?php $i++;} ?>
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>Id</th>
                    <th>Heading</th>
                    <th>Description</th>
                    <th>Image</th>
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
<?php include ('include/footer.php') ?>