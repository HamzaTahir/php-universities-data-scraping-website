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
        <h3>Add Culture Section</h3>
      </div>
      <div class="row" style="justify-content: center;">
        <h5>Enter Culture Details</h5>
      </div>
      <?php
            $conn=mysqli_connect("localhost","root","","education_host_pk");
            $qry = "SELECT * from culture";
            $result = mysqli_query($conn,$qry);
            echo "<table class='zebra table table-bordered table-striped'>
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Province Name</th>
                          <th>Image</th>
                          <th>Title</th>
                          <th>Culture</th>
                          <th>Map</th>
                        </tr>
                      </thead>
                      <tbody>";
            if (mysqli_num_rows($result)>0) {
              while($row = mysqli_fetch_assoc($result)){
                echo "<tr>
                          <td>".$row["id"]."</td>
                          <td>".$row["province_name"]."</td>
                          <td>
                            <img src=".$row["image"]." style='width:150px;height:120px;'
                              alt='Sorry Error Showing Image'></td>
                          <td>".$row["title"]."</td>
                          <td>
                            <textarea disabled='disabled'  class='form-control'>".$row["content"]."
                            </textarea>
                          </td>
                          <td>
                            <textarea disabled='disabled'  class='form-control'>".$row["map"]."
                            </textarea>
                          </td>
                        </tr>
                      ";
              }
              echo "</tbody>
                    </table>";
            }
            else{
              echo "<tr>
                      <th colspan='4' style='text-align:center'>No Data Sorry</th>
                    </tr>
                  </tbody>
                </table>";
            }
      ?>
      <div class="row">
        <form action="../Insert_Data/admin_panel_data_db_operations.php" 
              method="post" style="width: 100%;margin: 10px;margin-top: 0px;">
          <div class="container-fluid">
            <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-xs-12 col-12 
                   form-group">
                <label for="province_name">Province Name</label>
                <input type="text"name="province_name" class="form-control" required="required">
              </div>
            </div>
            <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-xs-12 col-12 
                   form-group">
                <label for="image_url">Imgae Url</label>
                <input type="text"name="image_url" class="form-control" required="required">
              </div>
            </div>
            <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-xs-12 col-12 
                   form-group">
                <label for="culture_title">Culture Title</label>
                <input type="text"name="culture_title" class="form-control" 
                  required="required">
              </div>
            </div>
            <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-xs-12 col-12 
                   form-group">
                <label for="culture_content">Culture Content</label>
                <textarea name="culture_content" class="form-control"
                  required="required">
                </textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-xs-12 col-12 
                   form-group">
                <label for="map_link">Map Link</label>
                <input type="text" name="map_link" class="form-control"
                  required="required">
              </div>
            </div>
            <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-xs-12 col-12 
                   form-group" style="text-align: center;">
              <input type="hidden" value="Culture" name="role">
              <input type="hidden" value="Add Culture" name="operation">
              <input type="submit" value="Add New Culture" class="btn btn-primary px-5 py-2" style="background-color: #388087;">
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