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
        <h1>Delete Admin Section</h1>
      </div>
    <!--   <div class="row" style="justify-content: center;">
        <h5>Enter Admin Details</h5>
      </div> -->
      <div class="row">
      <?php
            $conn=mysqli_connect("localhost","root","","education_host_pk");
            $qry = "SELECT * from admin_table";
            $result = mysqli_query($conn,$qry);
            echo "<table class='zebra table table-bordered table-striped'
                  style='width:96%'>
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>First Name</th>
                          <th>Second Name</th>
                          <th>Email</th>
                          <th>Operation</th>
                        </tr>
                      </thead>
                      <tbody>";
            if (mysqli_num_rows($result)>0) {
              while($row = mysqli_fetch_assoc($result)){
                echo "<tr>
                          <td>".$row["id"]."</td>
                          <td>".$row["first_name"]."</td>
                          <td>".$row["second_name"]."</td>
                          <td>".$row["email"]."</td>
                          <td>
                            <form action='../Insert_Data/admin_panel_data_db_operations.php'
                              method='POST'>
                              <input type='hidden' name='admin_email'
                                value='".$row['email']."'>
                              <input type='hidden' value='Admin' name='role'>
                              <input type='hidden' value='Delete Admin' name='operation'>
                              <input type='submit' value='Delete Admin' 
                               class='btn btn-primary' 
                               style='background-color: #388087;'>
                            </form>
                          </td>
                        </tr>
                      ";
              }
              echo "</tbody>
                    </table>";
            }
            else{
              echo "<tr>
                      <th colspan='5' style='text-align:center'>No Data Sorry</th>
                    </tr>
                  </tbody>
                </table>";
            }
      ?>
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