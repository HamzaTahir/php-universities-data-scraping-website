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
        <h1>Add University Section</h1>
      </div>
      <div class="row" style="justify-content: center;">
        <h5>Enter University Details</h5>
      </div>
      <div class="row">
        <form action="../Insert_Data/admin_panel_data_db_operations.php" 
              method="post" enctype="multipart/form-data"
              style="width: 100%;margin: 10px;margin-top: 0px;">
          <div class="container-fluid">
            <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-xs-12 col-12 
                   form-group">
                <label for="province_name">Province Name</label>
                <input type="text"name="province_name" class="form-control" 
                  required="required">
              </div>
            </div>
            <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-xs-12 col-12 
                   form-group">
                <label for="city_name">City Name</label>
                <input type="text"name="city_name" class="form-control" 
                  required="required">
              </div>
            </div>
            <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-xs-12 col-12 
                   form-group">
                <label for="university_name">University Name</label>
                <input type="text"name="university_name" class="form-control" 
                  required="required">
              </div>
            </div>
            <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-xs-12 col-12 
                   form-group">
                <label for="university_logo">University Logo</label>
                <input type="file"name="university_logo" class="form-control" 
                  required="required">
              </div>
            </div>
             <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-xs-12 col-12 
                   form-group">
                <label for="field_name">Field Name</label>
                <input type="text"name="field_name" class="form-control" 
                  required="required">
              </div>
            </div>
            <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-xs-12 col-12 
                   form-group">
                <label for="field_title">Field Title</label>
                <input type="text"name="field_title" class="form-control" 
                  required="required">
              </div>
            </div>
            <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-xs-12 col-12 
                   form-group">
                <label for="field_description">Field Description</label>
                <textarea name="field_description" class="form-control" 
                  required="required"></textarea> 
              </div>
            </div>
            <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-xs-12 col-12 
                   form-group">
                <label for="roadmap">RoadMap</label>
                <textarea name="roadmap" class="form-control" 
                  required="required"></textarea> 
              </div>
            </div>
             <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-xs-12 col-12 
                   form-group">
                <label for="website_link">Website Link</label>
                <input type="text"name="website_link" class="form-control" 
                  required="required">
              </div>
            </div>
            <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-xs-12 col-12 
                   form-group" style="text-align: center;">
              <input type="hidden" value="University" name="role">
              <input type="hidden" value="Add University" name="operation">
              <input type="submit" value="Add New University" class="btn btn-primary px-5 py-2" style="background-color: #388087;">
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