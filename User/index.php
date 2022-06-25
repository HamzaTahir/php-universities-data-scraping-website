<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

  <!-- Header -->
     <?php include("header_files.php") ?>
  <!-- Header -->

<body onload="=city_selection_function()">
   
    <!-- Translation API -->
     <?php include("translation_api.php") ?>
    <!-- Translation API -->

    <!-- Header -->
     <?php include("header.php") ?>
    <!-- Header -->
    
    <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/TopBanner.jpg);">
      <div class="container">
        <div class="row align-items-center justify-content-center site-hero-inner">
          <div class="col-md-10">
  
            <div class="mb-5 element-animate">
              <div class="block-17">
                <h2 class="heading text-center mb-4">Find Universities That Suits You</h2>
                <form action="search.php" target="_blank" method="POST" class="d-block d-lg-flex mb-4">
                  <div class="fields d-block d-lg-flex">
                   <!--  <div class="textfield-search one-third">
                      <input type="text" class="form-control" placeholder="Search..." name="search"></div> -->
                    <div class="select-wrap one-third">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="province" class="form-control" id="province_selection"
                       onchange="city_selection_function()">
                        <option value="Select Province">Select Province</option>
                         <?php
                            $conn=mysqli_connect("localhost","root","","education_host_pk");
                            $qry = "SELECT DISTINCT province_name from uni_details_table";
                            $res = mysqli_query($conn,$qry);
                            while($row = mysqli_fetch_assoc($res)){
                              echo "<option 
                                      value=".$row["province_name"]."> ".$row["province_name"]."
                                    </option>";
                            }
                          ?>
                      </select>
                    </div>
                    <div class="select-wrap one-third">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="city" class="form-control" id="city_selection">
                        <option value="Select City">Select City</option>
                        <!-- <option value="">Lahore</option>
                        <option value="">Islamabad</option>
                        <option value="">Karachi</option>
                        <option value="">Peshawar</option> -->
                      </select>
                    </div>
                    <div class="select-wrap one-third">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="field" class="form-control" id="field_selection">
                        <option value="Select Field">Select Field</option>
                        <!-- <option value="CS">CS</option>
                        <option value="BBA">BBA</option>
                        <option value="Medical">Medical</option> -->
                        <?php
                            $conn=mysqli_connect("localhost","root","","education_host_pk");
                            $qry = "SELECT DISTINCT field from uni_details_table";
                            $res = mysqli_query($conn,$qry);
                            while($row = mysqli_fetch_assoc($res)){
                              echo "<option 
                                      value=".$row["field"]."> ".$row["field"]."
                                    </option>";
                            }
                        ?>
                      </select>
                    </div>
                  </div>
                  <input type="submit" class="search-submit btn btn-primary" value="Search">  
                </form>
                <p class="text-center mb-5">We Have More than 100 Universities of Data to Help You.</p>
              <!--   <p class="text-center"><a href="#" class="btn py-3 px-5">Register Now</a></p> -->
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section element-animate">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 order-md-2">
            <div class="block-16">
              <figure>
                <img src="images/img_1.jpg" alt="Image placeholder" class="img-fluid">
                <a href="" class="play-button popup-vimeo"><span class="ion-ios-play"></span></a>
              </figure>
            </div>
          </div>
          <div class="col-md-6 order-md-1">

            <div class="block-15">
              <div class="heading">
                <h2>Welcome to Education Host PK</h2>
              </div>
              <div class="text mb-5">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A quibusdam nisi eos accusantium eligendi velit deleniti nihil ad deserunt rerum incidunt nulla nemo eius molestiae architecto beatae asperiores doloribus animi.</p>
              </div>
              <p><a href="about.php" class="btn btn-primary reverse py-2 px-4" style="background-color: #388087;">Read More</a></p>
              
            </div>

          </div>
          
        </div>

      </div>
    </section>
    <!-- END section -->

    <section class="site-section pt-3 element-animate">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <div class="media block-6 d-block">
              <div class="icon mb-3"><span class="flaticon-diploma"></span></div>
              <div class="media-body">
                <h3 class="heading">Knowledge is power</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit mess.</p>
                 <!-- <p><a href="#" class="more" style="color: #388087;font-weight: 800">Read More <span class="ion-arrow-right-c"></span></a></p> -->
              </div>
            </div> 
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="media block-6 d-block">
              <div class="icon mb-3"><span class="flaticon-university"></span></div>
              <div class="media-body">
                <h3 class="heading">Great Universties</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit mess.</p>
                 <!-- <p><a href="#" class="more" style="color: #388087;font-weight: 800">Read More <span class="ion-arrow-right-c"></span></a></p> -->
              </div>
            </div> 
          </div>
          
          <div class="col-md-6 col-lg-4">
            <div class="media block-6 d-block">
              <div class="icon mb-3"><span class="flaticon-book"></span></div>
              <div class="media-body">
                <h3 class="heading">Many Fields</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit mess.</p>
                 <!-- <p><a href="#" class="more" style="color: #388087;font-weight: 800">Read More <span class="ion-arrow-right-c"></span></a></p> -->
              </div>
            </div> 
          </div>
         <!--  <div class="col-md-6 col-lg-3">
            <div class="media block-6 d-block">
              <div class="icon mb-3"><span class="flaticon-professor"></span></div>
              <div class="media-body">
                <h3 class="heading">Unmatched Proffessor</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit mess.</p>
              </div>
            </div> 
          </div> -->
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section bg-light element-animate" id="section-counter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6" style="margin-top: 0.6em;">
            <figure><img src="images/img_2_b.jpg" alt="Image placeholder" class="img-fluid"></figure>
          </div>
          <div class="col-lg-5 ml-auto">
            <div class="block-15">
              <div class="heading">
                <h2>Education is Life</h2>
              </div>
              <!--  mb-5 -->
              <div class="text">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A quibusdam nisi eos accusantium eligendi velit deleniti nihil ad deserunt rerum incidunt.</p>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
               <!--  <div class="block-18 d-flex align-items-center">
                  <div class="icon mr-4">
                    <span class="flaticon-student"></span>
                  </div>
                  <div class="text">
                    <strong class="number" data-number="12921">0</strong>
                    <span>Students</span>
                  </div>
                </div>
 -->
                <div class="block-18 d-flex align-items-center">
                  <div class="icon mr-4">
                    <span class="flaticon-university"></span>
                  </div>
                  <div class="text">
                    <?php
                      $conn=mysqli_connect("localhost","root","","education_host_pk");
                      $qry = "SELECT count(DISTINCT uni_name) as total from uni_details_table";
                      $result = mysqli_query($conn,$qry);
                      $data=mysqli_fetch_assoc($result);
                      echo "
                      <strong class='number' 
                       data-number='".$data['total']."'>0
                      </strong>";
                    ?>
                <span>Universities</span>
                    
                  </div>
                </div>

              </div>
              <div class="col-md-6">
                <div class="block-18 d-flex align-items-center">
                  <div class="icon mr-4">
                    <span class="flaticon-books"></span>
                  </div>
                  <div class="text">
                   <?php
                      $conn=mysqli_connect("localhost","root","","education_host_pk");
                      $qry = "SELECT count(DISTINCT field) as total from uni_details_table";
                      $result = mysqli_query($conn,$qry);
                      $data=mysqli_fetch_assoc($result);
                      echo "
                      <strong class='number' 
                       data-number='".$data['total']."'>0
                      </strong>";
                    ?>
                    <span>Fileds</span>
                  </div>
                </div>

               <!--  <div class="block-18 d-flex align-items-center">
                  <div class="icon mr-4">
                    <span class="flaticon-mortarboard"></span>
                  </div>
                  <div class="text">
                    <strong class="number" data-number="10012">0</strong>
                    <span>Graduates</span>
                  </div>
                </div> -->
                
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-7 text-center section-heading">
            <h1 class="text-primary heading"  style="color: #388087 !important;">Popular Degree's</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit qui neque sint eveniet tempore sapiente.</p>
          </div>
        </div>
      </div>
      <div class="container-fluid block-11 element-animate">
        <div class="nonloop-block-11 owl-carousel">
           <?php
                  $conn=mysqli_connect("localhost","root","","education_host_pk");
                  $qry = "SELECT * from uni_details_table ORDER BY RAND() LIMIT 10";
                  $res = mysqli_query($conn,$qry);
                  while($row = mysqli_fetch_assoc($res)){

                    echo "
                    <form action='search.php' method='POST'>
                     <input type='hidden' name='university_name' 
                     value='".$row['uni_name']."'>
                     <input type='hidden' name='field' 
                     value='".$row['field']."'>
                    <div class='item'>
                      <div class='block-19' style='padding-bottom:2px'>
                          <figure>
                            <img src='".$row["uni_logo"]."' alt='Image' 
                             class='img-fluid' 
                             style='width:200px;height:200px;object-fit: contain;  display: block;margin-left: auto;
                               margin-right: auto;width: 50%;'>
                          </figure>
                          <div style='overflow: hidden;
                               text-overflow: ellipsis;
                               display: -webkit-box;
                               margin:20px;
                               max-height: 355px;
                               -webkit-line-clamp: 8;
                               -webkit-box-orient: vertical;'>
                            <h2 class='heading'>
                              <p>".$row["uni_name"]."
                                 ".$row["field"]."</p>
                            </h2>
                            <p class='mb-4'>
                              '".$row["field_description"]."'
                            </p>
                          </div>
                          <input type='submit' class='btn btn-primary submit' value='Read More' style='background-color: #388087;margin:20px;'></input>
                        </div>
                    </div>
                  </form>";
                    }
              ?>
         

        </div>
      </div>
    </div>
    <!-- END section -->


    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-7 text-center section-heading">
            <h1 class="text-primary heading"  style="color: #388087 !important;">Recent Post</h1>
          </div>
        </div>
      </div>
      <div class="container-fluid block-11 element-animate">
        <div class="nonloop-block-11 owl-carousel">
           <?php
                  $conn=mysqli_connect("localhost","root","","education_host_pk");
                  $qry = "SELECT * from post_table ORDER BY RAND() LIMIT 10";
                  $res = mysqli_query($conn,$qry);
                  while($row = mysqli_fetch_assoc($res)){

                    echo "
                    <form action='blog_single.php' method='POST'>
                     <input type='hidden' name='id' 
                     value='".$row['story_link']."'>
                        <div class='item' style='height:420px;'>
                          <div class='block-19' style='padding:10px;
                            padding-bottom:5px;height:420px;'>
                            <input type='hidden' name='story_link' 
                              value='".$row["story_link"]."'></input>
                            <div> ";
                              if ($row["story_image"]=='') {
                                echo " <p>
                                       <img style='width: 420px;height: 284px;' src='images/no image.png'>
                                        </p>";
                              }
                              elseif (strpos($row["story_image"], '<img src') !== false && strpos($row["story_image"], 'http') !== false ) {
                              echo " <p>".$row["story_image"]."</p>";
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
                        </div>
                      </div>        
                  </form>";
                    }
              ?>
        </div>
      </div>
    </div>
    <div class="site-section bg-light"></div>
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
