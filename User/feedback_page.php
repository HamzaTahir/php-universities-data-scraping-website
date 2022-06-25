<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

  <!-- Header -->
     <?php include("header_files.php") ?>
  <!-- Header -->

<body onload="=city_selection_function();field_selection_function();">
   
    <!-- Translation API -->
     <?php include("translation_api.php") ?>
    <!-- Translation API -->

    <!-- Header -->
     <?php include("header.php") ?>
    <!-- Header -->
   
    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-7 text-center section-heading">
            <h1 class="text-primary heading"  style="color: #388087 !important;">Feedback</h1>
           <!--  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit qui neque sint eveniet tempore sapiente.</p> -->
          </div>
        </div>
      </div>
      <div>
        <div class="container">
          <form id="feedback_form" action="feedback.php" method="POST"  
            class="subscribe">
            <div class="form-group">
            <input type="text" class="form-control email" placeholder="Enter email" id="feedback_email" name="feedback_email" required="required">
          </div>
          <div class="form-group">
            <textarea id="feedback_content" class="form-control" 
            placeholder="Enter Feedback" name="feedback_content" required="required"></textarea> 
          </div>
          <input type="button" onclick="feedback_function();" class="btn btn-primary submit" value="Submit" style="background-color: #388087;margin-top: 2%;">
          </form>
        </div>    
      </div>
      </div>
       <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-7 text-center section-heading">
            <h1 class="text-primary heading"  style="color: #388087 !important;">Previous Feedbacks</h1>
          </div>
        </div>
      </div>
        <div class="container-fluid bg-light block-11 element-animate">
        <div class="nonloop-block-11 owl-carousel">
           <?php
                  $conn=mysqli_connect("localhost","root","","education_host_pk");
                  $qry = "SELECT * from feedback ORDER BY RAND() LIMIT 10";
                  $res = mysqli_query($conn,$qry);
                  while($row = mysqli_fetch_assoc($res)){
                    echo "
                    <div class='item'>
                      <div class='block-19'>
                          <div class='text'>
                              <p>
                                <label>Email: </label>
                                ".$row["email"]."
                              </p>
                              <p style='word-wrap: break-word;width: 400px;margin: 0 auto; overflow: hidden;
                               text-overflow: ellipsis;
                               display: -webkit-box;
                               height: 150px;
                               max-height: 350px;
                               -webkit-line-clamp: 9;
                               -webkit-box-orient: vertical;'>
                                <label>Feedback: </label>
                                ".$row["feedback"]."
                              </p>
                          </div>
                        </div>
                    </div>
                  ";
                    }
              ?>
         

        </div>
      </div>
     
    </div>
    <!-- END section -->
    <div class="site-section bg-light">
    </div>
    <!-- Footer -->
     <?php include("subscribe_section.php") ?>
    <!-- Footer -->
  
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
<?php
?>