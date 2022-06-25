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
<style type="text/css">
img{
  width: 100px;
  height: 100px;
}
</style>
<script type="text/javascript">
 function Update_Function(value){
  // alert("Hi "+ value);
  $("body input").prop("disabled", true);
  // $(".submit :input").prop("disabled", true);
  $(".submit").css("display", "none");
  $(".update_button").css("display", "block");
  story_link_id = "story_link_"+value;
  story_title_id = "story_title_"+value;
  story_image_id = "story_image_"+value;
  story_content_id = "story_content_"+value;
  
  submit_button_id = "submit_button_"+value;
  update_button_id = "update_button_"+value;
  role_id    = "role_"+value;
  operation_id = "operation_"+value;
  id = "id_"+value;

  document.getElementById(story_link_id).disabled = false;
  document.getElementById(story_title_id).disabled = false;
  document.getElementById(story_image_id).disabled = false;
  document.getElementById(story_content_id).disabled = false;

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
        <h1>Update Post Section</h1>
      </div>
     <!--  <div class="row" style="justify-content: center;">
        <h5>Enter Admin Details</h5>
      </div> -->
      <div class="row">
      <?php
            $conn=mysqli_connect("localhost","root","","education_host_pk");
            $qry = "SELECT * from post_table";
            $result = mysqli_query($conn,$qry);
            echo "<table class='zebra table table-bordered table-striped'
                  style='width:96%'>
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Post Link</th>
                          <th>Post Title</th>
                          <th>Post Image</th>
                          <th>Post Content</th>
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
                            <textarea cols='50' rows='5' type='text' name='story_link'
                              id='story_link_".$row["id"]."'
                              disabled='disabled' class='form-control'>".$row["story_link"]."
                            </textarea>
                          </td>
                          <td>
                            <textarea cols='50' rows='5' type='text' name='story_title'
                              id='story_title_".$row["id"]."'
                              disabled='disabled' class='form-control'>".$row["story_title"]."</textarea>
                          </td>
                          <td>
                            <textarea cols='50' rows='5' type='text' name='story_image'
                              id='story_image_".$row["id"]."'
                               disabled='disabled' class='form-control'>".$row["story_image"]."
                              </textarea>
                          </td>
                          <td>
                            <textarea cols='50' rows='5' type='text' name='story_content'
                              id='story_content_".$row["id"]."'
                              disabled='disabled' class='form-control'>".$row["story_content"]."</textarea>
                          </td>
                          <td>
                            <input id='id_".$row["id"]."'  
                              type='hidden' value=".$row["id"]."
                              name='id'>

                            <input id='role_".$row["id"]."'  
                              type='hidden' value='Post' 
                              name='role'>
                            
                            <input id='operation_".$row["id"]."'  
                              type='hidden' value='Update Post' 
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