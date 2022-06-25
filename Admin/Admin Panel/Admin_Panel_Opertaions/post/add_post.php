<?php
session_start();
if(!isset($_SESSION['first_name']))
{
  header("location:../../admin_login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Admin Side Bar  -->
  <link rel="stylesheet" href="../../css/styling.css">
  <?php include('../../admin_head.php') ?>
  <!-- Admin Side Bar  -->

</head>
<body>
<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <!-- Admin Side Bar  -->
  <?php include('../admin_side_bar2.php') ?>
  <!-- Admin Side Bar  -->


  <!-- sidebar-wrapper  -->
   <main class="page-content">
    <div class="container-fluid">
      <div class="row" style="justify-content: center;">
        <h1>Add Post Section</h1>
      </div>
      <div class="row" style="justify-content: center;">
        <h5>Enter Post Details</h5>
      </div>
      <div class="row">
        <form action="../Insert_Data/admin_panel_data_db_operations.php" 
              method="POST"  enctype="multipart/form-data"
              style="width: 100%;margin: 10px;margin-top: 0px;">
          <div class="container-fluid">
            <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-xs-12 col-12 
                   form-group">
                <label for="post_link">Post Link</label>
                <input type="text"name="post_link" class="form-control" 
                  required="required">
              </div>
            </div>
             <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-xs-12 col-12 
                   form-group">
                <label for="post_title">Post Title</label>
                <input type="text"name="post_title" class="form-control" 
                  required="required">
              </div>
            </div>
            <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-xs-12 col-12 
                   form-group">
                <label for="post_image">Post Image</label>
                <input type="file"name="uploadfile" class="form-control" 
                  required="required">
              </div>
            </div>
             <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-xs-12 col-12 
                   form-group">
                <label for="page_content">Post Content</label>
                <textarea name="page_content" class="form-control" 
                  required="required"></textarea> 
              </div>
            </div>
            <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-xs-12 col-12 
                   form-group" style="text-align: center;">
              <input type="hidden" value="Post" name="role">
              <input type="hidden" value="Add Post" name="operation">
              <input type="submit" value="Add New Post" class="btn btn-primary px-5 py-2" style="background-color: #388087;">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </main>
</div>
  <!-- Admin Footer Files  -->
  <?php include('../../admin_footer_files.php') ?>
  <!-- Admin Footer Files  -->
  <script src="../../js/functions.js"></script>
</body>

</html>