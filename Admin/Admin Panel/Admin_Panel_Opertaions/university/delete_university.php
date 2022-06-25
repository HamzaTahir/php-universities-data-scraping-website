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
        <h1>Delete University Section</h1>
      </div>
      <div class="row" style="justify-content: center;">
        <h5>Enter University Details</h5>
      </div>
      <div class="table-responsive" style="margin-bottom: 1%;height: 500px !important;">
      <?php
            $conn=mysqli_connect("localhost","root","","education_host_pk");
            $qry = "SELECT * from uni_details_table";
            $result = mysqli_query($conn,$qry);
            echo "
            <table class='table nowrap zebra table table-bordered table-striped' style='width:2000px !important;'>
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Province Name</th>
                    <th>City Name</th>
                    <th>University Logo</th>
                    <th>University Name</th>
                    <th>Field Name</th>
                    <th>Field Title</th>
                    <th>Field Description</th>
                    <th>Field Roadmap</th>
                    <th>Operation</th>
                  </tr>
                </thead>
                <tbody>";
            if (mysqli_num_rows($result)>0) {
              while($row = mysqli_fetch_assoc($result)){
                echo "<tr>
                          <td>".$row["id"]."</td>
                          <td>
                            <input disabled='disabled' class='form-control'
                            value=".$row["province_name"].">
                          </td>
                          <td>
                            <input disabled='disabled' class='form-control'
                            value=".$row["city_name"].">
                          </td>
                          <td>
                            <textarea cols='50' rows='3' disabled='disabled' class='form-control'>".$row["uni_logo"]."
                            </textarea>
                          </td>
                          <td>
                            <textarea cols='30' rows='2' disabled='disabled' class='form-control'>".$row["uni_name"]."
                            </textarea>

                          </td>
                          <td>
                            <textarea cols='30' rows='2' disabled='disabled' class='form-control'>".$row["field"]."
                            </textarea>
                          </td>
                          <td>
                            <textarea cols='40' rows='2'disabled='disabled' class='form-control'>".$row["field_title"]."
                            </textarea>
                          </td>
                          <td>
                            <textarea cols='50' rows='5'disabled='disabled' class='form-control'>".$row["field_description"]."
                            </textarea>
                          </td>
                          <td><textarea cols='50' rows='5'disabled='disabled' class='form-control'>";
                          if ($row["field_roadmap"]!='') {
                             echo $row["field_roadmap"];
                          }
                          else if($row["field_roadmap"]=='') {
                             echo " ".$row["Semester_1"].".
                                    ".$row["Semester_2"].".
                                    ".$row["Semester_3"].".
                                    ".$row["Semester_4"].".
                                    ".$row["Semester_5"].".
                                    ".$row["Semester_6"].".
                                    ".$row["Semester_7"].".
                                    ".$row["Semester_8"].".
                                 
                             ";
                          }
                          echo "</textarea></td>                         
                          <td>
                            <form action='../Insert_Data/admin_panel_data_db_operations.php'
                              method='POST'>
                              <input type='hidden' name='id'
                                value='".$row['id']."'>
                              <input type='hidden' value='University' name='role'>
                              <input type='hidden' value='Delete University' name='operation'>
                              <input type='submit' value='Delete University' 
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
                      <th colspan='10' style='text-align:center'>No Data Sorry</th>
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