<?php
session_start();
?> 
<!DOCTYPE html>
<html lang="en">
  <!-- Header -->
      <?php include("header_files.php") ?>
  <!-- Header -->
<style type="text/css">
img{
    width: 330px;
    height: 250px;
}
</style>
<body>
   
    <!-- Translation API -->
     <?php include("translation_api.php") ?>
    <!-- Translation API -->
     <!-- Header -->
     <?php include("header.php") ?>
    <!-- Header -->


    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center element-animate">
          <div class="col-md-7 text-center section-heading">
            <h1 class="text-primary heading"  style="color: #388087 !important;">Our Posts</h1>
          </div>
        </div>
      </div>
      <div>
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
             <?php
                  $conn=mysqli_connect("localhost","root","","education_host_pk");
                  $qry = "SELECT * from post_table";
                  $res = mysqli_query($conn,$qry);
                  while($row = mysqli_fetch_assoc($res)){
                    echo "
                        <div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12 col-12' style='marign-bottom:10px;'>
                         <form action='blog_single.php' method='POST'>
                            <div class='item' style='height:420px;'>
                                <div class='block-19' style='padding:10px;
                                 padding-bottom:5px;'>
                                    <input type='hidden' name='story_link' 
                                     value='".$row["story_link"]."'></input>
                                    <div> ";
                                    if ($row["story_image"]=='') {
                                        echo " <p>
                                            <img src='images/no image.png'>
                                        </p>";
                                    }
                                    elseif (strpos($row["story_image"], '<img src') !== false && strpos($row["story_image"], 'http') !== false ) {
                                      echo " <p>
                                            ".$row["story_image"]."
                                        </p>";
                                    }
                                    elseif (strpos($row["story_image"], 'http') !== false) {
                                      echo "<img src='".$row["story_image"]."'>";

                                    }
                                    else{
                                        $imagePath="../Admin/Admin Panel/Admin_Panel_Opertaions/Insert_Data/upload_images/".$row["story_image"];
                                      echo "<img src='".$imagePath."'>";
                                    }
                                      
                                    echo "<p style='font-size:15px;
                                            margin: 0 auto; 
                                            overflow: hidden;
                                            text-overflow: ellipsis;
                                            display: -webkit-box;
                                            -webkit-line-clamp: 2;
                                            -webkit-box-orient: vertical;'>
                                            ".$row["story_title"]."
                                        </p>
                                    </div>
                                    <input type='submit' class='btn btn-primary submit' value='Read More' style='background-color: #388087;'>
                                    </input>
                                </div>
                            </div>
                       </form>
                    </div>
                    
                  ";
                    }
              ?>
         
        </div>
      </div>
    </div>

    
    
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