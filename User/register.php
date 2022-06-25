<?php
session_start();
if (isset($_SESSION["first_name"])){
    echo "<script>window.location='index.php'</script>";
}
?> 
<!DOCTYPE html>
<html lang="en">
  <!-- Header -->
     <?php include("header_files.php") ?>
  <!-- Header -->
<body>
   
    <!-- Translation API -->
     <?php include("translation_api.php") ?>
    <!-- Translation API -->
    
   <!-- Header -->
    <?php include("header.php") ?>
   <!-- Header -->




    <section class="site-hero site-sm-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_2.jpg);">
      <div class="container">
        <div class="row align-items-center justify-content-center site-hero-sm-inner">
          <div class="col-md-7 text-center">
  
            <div class="mb-5 element-animate">
              <h1 class="mb-2">Register</h1>
              <p class="bcrumb"><a href="index.html">Home</a> <span class="sep ion-android-arrow-dropright px-2"></span>  <span class="current">Register</span></p>
            </div>
            
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    
    <section class="site-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7">
            <div class="form-wrap">
              <h2 class="mb-5">Register new account</h2>
              <form action="new_user_submit.php" method="post">
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="text">First Name</label>
                      <input type="text" name="first_name" class="form-control py-2 " required="required">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="text">Second Name</label>
                      <input type="text" name="second_name" class="form-control py-2 " required="required">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="email">Email Address</label>
                      <input type="email" name="user_email" class="form-control py-2" required="required"> 
                    </div>
                  </div>
                  <div class="row mb-5">
                    <div class="col-md-12 form-group">
                      <label for="password">Password</label>
                      <input type="password" name="user_password" class="form-control py-2" required="required">
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="submit" value="Register" name="submit" class="btn btn-primary px-5 py-2" style="background-color: #388087;">
                    </div>
                  </div>
                </form>
              </div>
          </div>
        </div>
      </div>
    </section>
    
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