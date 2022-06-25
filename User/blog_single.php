<?php
$conn=mysqli_connect("localhost","root","","education_host_pk");
session_start();

if(isset($_POST["story_link"])){

  $story_link = $_POST["story_link"];
}
else{
    echo "<script>window.location='blog.php'</script>";
}
?> 
<!DOCTYPE html>
<html lang="en">
  <!-- Header -->
     <?php include("header_files.php") ?>
  <!-- Header -->
<style type="text/css">
img{
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
</style>
<body>
   
    <!-- Translation API -->
     <?php include("translation_api.php") ?>
    <!-- Translation API -->
    
    <!-- Header -->
     <?php include("header.php") ?>
    <!-- Header -->


    <section class="site-section element-animate">
    <div>
      <?php

        $qry = "SELECT * from post_table WHERE story_link='".$story_link."' ";
        $res = mysqli_query($conn,$qry);

        while($row = mysqli_fetch_assoc($res)){
             // echo $row["story_title"]."<br>".$row["story_image"]."<br>".$row["story_content"];
          echo "<div class='container'>
                <p style='text-align:center;font-size: 30px;font-weight: 400;'>".$row["story_title"]."</p>
                ";
            if ($row["story_image"]=='') {
              echo "  <p>
                        <img style='width: 420px;height: 284px;' 
                          src='images/no image.png' class='responsive'>
                      </p>";
            }
            elseif (strpos($row["story_image"], '<img src') !== false && strpos($row["story_image"], 'http') !== false ) {
              echo " <p>".$row["story_image"]."</p>";
            }
            elseif (strpos($row["story_image"], 'http') !== false) {
              echo "<img  class='responsive' src='".$row["story_image"]."'>";
            }
            else{
                  $imagePath="../Admin/Admin Panel/Admin_Panel_Opertaions/Insert_Data/upload_images/".$row["story_image"];
                  echo "<img class='responsive' src='".$imagePath."'>";
            } 
          echo "<p style='text-align:center'>".$row["story_content"]."</p>

          </div>";
         }
       
        ?>
    </div>
<!--     </section>
    <section>
      <div class="site-section bg-light">
        <div class="container">
          <div class="comment-form-wrap pt-5">
            <h3 class="mb-5">Leave a comment</h3>
              <form action="#" class="bg-light">
                <div class="form-group">
                  <label for="name">Name *</label>
                  <input type="text" class="form-control" id="name">
                </div>
                <div class="form-group">
                  <label for="email">Email *</label>
                  <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                  <label for="website">Website</label>
                  <input type="url" class="form-control" id="website">
                </div>
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="Post Comment" class="btn btn-primary">
                </div>
              </form>
            </div>
          </div>
        </div>
      </section> -->

    <!-- Susbcribe Section -->
     <?php include("subscribe_section.php") ?>
    <!-- Susbcribe Section -->

    <!-- Footer -->
     <?php include("footer.php") ?>
    <!-- Footer -->
    
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>
    <script src="js/jquery.waypoints.min.js"></script>

    <!-- Header Files In Footer -->
     <?php include("header_files_in_footer.php") ?>
    <!-- Header Files In Footer -->

    
    
  </body>
</html>