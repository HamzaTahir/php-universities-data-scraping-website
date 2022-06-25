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
        <h1>Delete Post Section</h1>
      </div>
      <div class="row" style="justify-content: center;">
        <h5>Enter Post Details</h5>
      </div>
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
                          <td>".$row["id"]."</td>
                          <td>
                            <textarea cols='50' rows='5'disabled='disabled' class='form-control'>".$row["story_link"]."
                            </textarea>
                          </td>
                          <td>
                            <textarea cols='50' rows='5'disabled='disabled' class='form-control'>".$row["story_title"]."
                            </textarea>
                          </td>
                          ";
                           if ($row["story_image"]=='') {
                              echo "<td><p>
                                <img src='../../images/no image.png'>
                              </p></td>";
                            }
                            elseif (strpos($row["story_image"], '<img src') !== false && strpos($row["story_image"], 'http') !== false ) {
                                      echo "<td><p>
                                            ".$row["story_image"]."
                                        </p></td>";
                                    }
                                    elseif (strpos($row["story_image"], 'http') !== false) {
                                      echo "<td><img src='".$row["story_image"]."'></td>";

                                    }
                            else{
                                $imagePath="../Insert_Data/upload_images/".$row["story_image"];
                                  echo "<td><img src='".$imagePath."'></td>";
                            }
                          echo "
                          <td>
                            <textarea cols='100' rows='10'disabled='disabled' class='form-control'>".$row["story_content"]."
                            </textarea>
                          </td>
                          <td>
                            <form action='../Insert_Data/admin_panel_data_db_operations.php'
                              method='POST'>
                              <input type='hidden' name='story_id'
                                value='".$row['id']."'>
                              <input type='hidden' name='story_link'
                                value='".$row['story_link']."'>
                              <input type='hidden' value='Post' name='role'>
                              <input type='hidden' value='Delete Post' name='operation'>
                              <input type='submit' value='Delete Post' 
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