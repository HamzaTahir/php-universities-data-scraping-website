<?php
session_start();
if(!isset($_SESSION['first_name']))
{
  header("location:admin_login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  
<head>
  <!-- Admin Head  -->
  <?php include('admin_head.php') ?>
  <!-- Admin Head  -->
</head>
<body>
<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <!-- Admin Side Bar  -->
  <?php include('admin_side_bar.php') ?>
  <!-- Admin Side Bar  -->

  <!-- sidebar-wrapper  -->
  <main class="page-content">
    <div class="container-fluid">
          <div class="row" style="margin-top: 3%;">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 col-12">
              <div class="dashboard_small_boxes dashboard_small_boxes_1">
                <span class="fa fa-user"><br>
                  Total Admin<br>
                  <?php
                      $conn=mysqli_connect("localhost","root","","education_host_pk");
                      $qry = "SELECT count(id) as total from admin_table";
                      $result = mysqli_query($conn,$qry);
                      $data=mysqli_fetch_assoc($result);
                      echo $data['total'];
                  ?>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 col-12">
              <div class="dashboard_small_boxes dashboard_small_boxes_2">
                <span class="fa fa-user-o"><br>
                Total User<br>
                <?php
                      $conn=mysqli_connect("localhost","root","","education_host_pk");
                      $qry = "SELECT count(user_id) as total from users_table";
                      $result = mysqli_query($conn,$qry);
                      $data=mysqli_fetch_assoc($result);
                      echo $data['total'];
                ?>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 col-12">
              <div class="dashboard_small_boxes dashboard_small_boxes_3">
                <span class="fa fa-building"><br>
                Total Province<br>
                <?php
                      $conn=mysqli_connect("localhost","root","","education_host_pk");
                      $qry = "SELECT count(DISTINCT province_name) as total from uni_details_table";
                      $result = mysqli_query($conn,$qry);
                      $data=mysqli_fetch_assoc($result);
                      echo $data['total'];
                ?>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 col-12">
              <div class="dashboard_small_boxes dashboard_small_boxes_4">
                <span class="fa fa-building"><br>
                Total City<br>
                <?php
                      $conn=mysqli_connect("localhost","root","","education_host_pk");
                      $qry = "SELECT count(DISTINCT city_name) as total from uni_details_table";
                      $result = mysqli_query($conn,$qry);
                      $data=mysqli_fetch_assoc($result);
                      echo $data['total'];
                ?>
              </div>
            </div>
          </div>
         <div class="row" style="margin-top: 3%;">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 col-12">
              <div class="dashboard_small_boxes dashboard_small_boxes_5">
                <span class="fa fa-university"><br>
                Total University<br>
                <?php
                      $conn=mysqli_connect("localhost","root","","education_host_pk");
                      $qry = "SELECT count(DISTINCT uni_name) as total from uni_details_table";
                      $result = mysqli_query($conn,$qry);
                      $data=mysqli_fetch_assoc($result);
                      echo $data['total'];
                ?>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 col-12">
              <div class="dashboard_small_boxes dashboard_small_boxes_6">
                <span class="fa fa-flask"><br>
                Total Field<br>
                <?php
                      $conn=mysqli_connect("localhost","root","","education_host_pk");
                      $qry = "SELECT count(DISTINCT field) as total from uni_details_table";
                      
                      $result = mysqli_query($conn,$qry);
                      $data=mysqli_fetch_assoc($result);
                      echo $data['total'];
                ?>
              </div>
            </div>
            
             <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 col-12">
              <div class="dashboard_small_boxes dashboard_small_boxes_8">
                <span class="fa fa-globe"><br>
                Total Culture<br>
                <?php
                      $conn=mysqli_connect("localhost","root","","education_host_pk");
                      $qry = "SELECT count(id) as total from culture";
                      $result = mysqli_query($conn,$qry);
                      $data=mysqli_fetch_assoc($result);
                      echo $data['total'];
                ?>
              </div>
            </div>
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 col-12">
              <div class="dashboard_small_boxes dashboard_small_boxes_5">
                <span class="fa fa-message"><br>
                Total Subscribe<br>
                <?php
                      $conn=mysqli_connect("localhost","root","","education_host_pk");
                      $qry = "SELECT count(id) as total from subscribe";
                      $result = mysqli_query($conn,$qry);
                      $data=mysqli_fetch_assoc($result);
                      echo $data['total'];
                ?>
              </div>
            </div>
          </div>
         <div class="row" style="margin-top: 3%;">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 col-12">
              <div class="dashboard_small_boxes dashboard_small_boxes_6">
                <span class="fa fa-flask"><br>
                Total Feedback<br>
                <?php
                      $conn=mysqli_connect("localhost","root","","education_host_pk");
                      $qry = "SELECT count(id) as total from feedback";
                      $result = mysqli_query($conn,$qry);
                      $data=mysqli_fetch_assoc($result);
                      echo $data['total'];
                ?>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 col-12">
              <div class="dashboard_small_boxes dashboard_small_boxes_6">
                <span class="fa fa-flask"><br>
                Total Post<br>
                <?php
                      $conn=mysqli_connect("localhost","root","","education_host_pk");
                      $qry = "SELECT count(id) as total from post_table";
                      $result = mysqli_query($conn,$qry);
                      $data=mysqli_fetch_assoc($result);
                      echo $data['total'];
                ?>
              </div>
            </div>
           <!--  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 col-12">
              <div class="dashboard_small_boxes dashboard_small_boxes_8">
                <span class="fa fa-user"><br>
                Total City<br>
                00
              </div>
            </div> -->
          </div>
    </div>

  </main>
</div>


  <!-- Admin Footer Files  -->
  <?php include('admin_footer_files.php') ?>
  <!-- Admin Footer Files  -->
    
    <script src="js/functions.js"></script>
</body>

</html>