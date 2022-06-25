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
        <h1>Add Field Section</h1>
      </div>
      <div class="row" style="justify-content: center;">
        <h5>Enter Field Details</h5>
      </div>
      <div class="row">
        <form action="../Insert_Data/admin_panel_data_db_operations.php" 
              method="post" style="width: 100%;margin: 10px;margin-top: 0px;">
          <div class="container-fluid">
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
                   form-group" style="text-align: center;">
              <input type="hidden" value="Field" name="role">
              <input type="hidden" value="Add Field" name="operation">
              <input type="submit" value="Add New Field" class="btn btn-primary px-5 py-2" style="background-color: #388087;">
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