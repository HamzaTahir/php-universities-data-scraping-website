<?php
session_start();
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


    <!-- <section class="site-hero site-sm-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_2.jpg);">
      <div class="container">
        <div class="row align-items-center justify-content-center site-hero-sm-inner">
          <div class="col-md-7 text-center">
  
            <div class="mb-5 element-animate">
              <h1 class="mb-2">Contact Us</h1>
              <p class="bcrumb"><a href="index.html">Home</a> <span class="sep ion-android-arrow-dropright px-2"></span>  <span class="current">Contact Us</span></p>
            </div>
            
          </div>
        </div>
      </div>
    </section> -->
    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center element-animate">
          <div class="col-md-7 text-center section-heading">
            <h1 class="text-primary heading"  style="color: #388087 !important;">Contact Us</h1>
          </div>
        </div>
      </div>
    <div>
    <!-- END section -->

    <section class="site-section element-animate">
      <div class="container">
        <div class="row">
          <div class="col-md-8 pr-md-5">
            <form action="submit_conact.php" method="POST">
                  <div class="row">
                    <div class="col-md-4 form-group">
                      <label for="name">Name</label>
                      <input type="text" id="name" name="name" class="form-control py-2">
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="phone">Phone</label>
                      <input type="text" id="phone" name="phone" class="form-control py-2">
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="email">Email</label>
                      <input type="email" id="email" name="email" class="form-control py-2">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="message">Write Message</label>
                      <textarea name="message" id="message" name="message" class="form-control py-2" cols="30" rows="8"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="submit" value="Send Message" class="btn btn-primary" style="background-color: #388087;">
                    </div>
                  </div>
                </form>
          </div>
          <div class="col-md-4">
            <div class="block-23">
            <h3 class="heading">Contact Information</h3>
              <ul>
                <li><span class="icon ion-android-pin" style="color: #388087;"></span><span class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. </span></li>
                <li><a href="#" style="font-weight: 500 !important;"><span class="icon ion-ios-telephone" style="color: #388087;"></span><span class="text"> +69 69696969</span></a></li>
                <li><a href="#" style="font-weight: 500 !important;"><span class="icon ion-android-mail" style="color: #388087;"></span><span class="text">info@host_education_pk.com</span></a></li>
               
              </ul>
          </div>
          </div>
          
        </div>

      </div>
    </section>
    <!-- END section -->

    <!-- <div id="map"></div> -->
    
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