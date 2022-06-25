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
<script type="text/javascript">
 function Update_Function(value){
  // alert("Hi "+ value);
  $("body input").prop("disabled", true);
  // $(".submit :input").prop("disabled", true);
  $(".submit").css("display", "none");
  $(".update_button").css("display", "block");
  province_name_id = "province_name_"+value;
  city_name_id = "city_name_"+value;
  uni_logo_id = "uni_logo_"+value;
  uni_name_id = "uni_name_"+value;
  field_id = "field_"+value;
  field_title_id = "field_title_"+value;
  field_description_id = "field_description_"+value;
  field_roadmap_id = "field_roadmap_"+value;
  
  submit_button_id = "submit_button_"+value;
  update_button_id = "update_button_"+value;
  role_id    = "role_"+value;
  operation_id = "operation_"+value;
  id = "id_"+value;

  document.getElementById(province_name_id).disabled = false;
  document.getElementById(city_name_id).disabled = false;
  document.getElementById(uni_logo_id).disabled = false;
  document.getElementById(uni_name_id).disabled = false;
  document.getElementById(field_id).disabled = false;
  document.getElementById(field_title_id).disabled = false;
  document.getElementById(field_description_id).disabled = false;
  document.getElementById(field_roadmap_id).disabled = false;
  // document.getElementById(update_button_id).disabled = true;
  document.getElementById(update_button_id).style.display = 'none';

  document.getElementById(submit_button_id).disabled = false;
  document.getElementById(submit_button_id).style.display = 'block';

  document.getElementById(role_id).disabled = false;
  document.getElementById(operation_id).disabled = false;
  document.getElementById(id).disabled = false;

 }
</script>
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
        <h1>Update University Section</h1>
      </div>
     <!--  <div class="row" style="justify-content: center;">
        <h5>Enter Admin Details</h5>
      </div> -->
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
                    <th>Field </th>
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
                       <form action='../Insert_Data/admin_panel_data_db_operations.php'
                         method='POST'>
                          <td>".$row["id"]."</td>
                          <td>
                            <input type='text' name='province_name'
                              id='province_name_".$row["id"]."'
                              value=".$row["province_name"]."
                              disabled='disabled' class='form-control'>
                          </td>
                          <td>
                            <input type='text' name='city_name'
                              id='city_name_".$row["id"]."'
                              value=".$row["city_name"]."
                              disabled='disabled' class='form-control'>
                          </td>
                           <td>
                            <textarea cols='50' rows='3' name='uni_logo'
                              id='uni_logo_".$row["id"]."' type='file'
                              disabled='disabled' class='form-control'>".$row["uni_logo"]."</textarea>
                          </td>
                          <td>
                            <textarea cols='30' rows='2' name='uni_name'
                              id='uni_name_".$row["id"]."'
                              disabled='disabled' class='form-control'>".$row["uni_name"]."</textarea>
                          </td>
                          <td>
                            <textarea  cols='30' rows='2' name='field_name'
                              id='field_".$row["id"]."'
                              disabled='disabled' class='form-control'>".$row["field"]."</textarea>
                          </td>
                          <td>
                            <textarea  cols='40' rows='2' name='field_title'
                              id='field_title_".$row["id"]."'
                              disabled='disabled' class='form-control'>".$row["field_title"]."</textarea>
                          </td>
                        <td>
                            <textarea cols='50' rows='5'disabled='disabled' class='form-control' name='field_description'
                              id='field_description_".$row["id"]."'
                              disabled='disabled' >".$row["field_description"]."
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
                            <input id='id_".$row["id"]."'  
                              type='hidden' value=".$row["id"]."
                              name='id'>

                            <input id='role_".$row["id"]."'  
                              type='hidden' value='University' 
                              name='role'>
                            
                            <input id='operation_".$row["id"]."'  
                              type='hidden' value='Update University' 
                              name='operation'>
 
                             <input type='submit' value='Confirm Update' 
                              class='btn btn-primary submit' 
                              id='submit_button_".$row["id"]."' 
                              style='background-color: #388087;display:none'>
                          </form>
                              <button 
                                class='btn btn-primary update_button' 
                                style='background-color: #388087;'
                                id='update_button_".$row["id"]."'
                                onClick='Update_Function(".$row["id"].");'>
                                Update University
                              </button>
                          </td>

                          
                      </tr>";
              }
              echo "</tbody>
                    </table>";
            }
            else{
              echo "<tr>
                      <th colspan='6' style='text-align:center'>No Data Sorry</th>
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