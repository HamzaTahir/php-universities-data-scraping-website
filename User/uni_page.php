<?php
$conn=mysqli_connect("localhost","root","","education_host_pk");
session_start();

if (!isset($_POST["province_name"]) && !isset($_POST["city_name"]) && 
    !isset($_POST["uni_name"]) && !isset($_POST["field_name"])) {
    echo "<script>
        window.location.href='index.php';
        </script>";
}
else{
  $province_name = $_POST["province_name"];
  $city_name = $_POST["city_name"];
  $uni_name = $_POST["uni_name"];
  $field_name = $_POST["field_name"];
}

?> 
<!DOCTYPE html>
<html lang="en">
  <!-- Header -->
     <?php include("header_files.php") ?>
  <!-- Header -->


<body onload="onLoadFunctionForUniPage();">
   
    <!-- Translation API -->
     <?php include("translation_api.php") ?>
    <!-- Translation API -->
    
   <!-- Header -->
    <?php include("header.php") ?>
   <!-- Header -->


    <section class="site-section element-animate">
    <div>
      <?php
           $qry = "SELECT * from uni_details_table WHERE 
                province_name='".$province_name."' AND 
                city_name='".$city_name."' AND
                uni_name='".$uni_name."' AND
                field='".$field_name."' ";
        	$result = mysqli_query($conn,$qry);
   		
	    if(mysqli_num_rows($result)==1){
		  	    $row=mysqli_fetch_assoc($result);
				$province_name = $row["province_name"];
				$city_name = $row["city_name"];
				$uni_logo = $row["uni_logo"];
				$uni_name = $row["uni_name"];
				$field = $row["field"];
				$field_title = $row["field_title"];
				$field_description = $row["field_description"];
				$Semester_1 = $row["Semester_1"];
				$Semester_2 = $row["Semester_2"];
				$Semester_3 = $row["Semester_3"];
				$Semester_4 = $row["Semester_4"];
				$Semester_5 = $row["Semester_5"];
				$Semester_6 = $row["Semester_6"];
				$Semester_7 = $row["Semester_7"];
        $Semester_8 = $row["Semester_8"];
				$roadmap = $row["field_roadmap"];
        if ($field== "BS(IE)") {
          $field = "BS(Industrial Engineering)";
        }
        // echo $province_name;
        // echo $city_name;
        // echo $uni_name;
        // echo $field;
        echo "<div>
            <img src= ".$uni_logo." class='responsive'
                 style='display: block;margin-left: auto;margin-right: auto;'>
            </img>
            <div class='container' style='margin-top:1%;'>
                <table class='table heading_table'>
                  <thead>
                    <th id='province_name_heading'>Province Name</th>
                    <th id='city_name_heading'>City Name</th>
                    <th id='university_name_heading'>Uni Name</th>
                    <th id='field_name_heading'>Field</th>
                  </thead>
                  <tbody>
                    <tr  id='tr_after_heading'>
                      <td id='province_name'> ".$province_name."</td>
                      <td id='city_name'> ".$city_name."</td>
                      <td id='university_name'> ".$uni_name."</td>
                      <td id='field_name'> ".$field."</td>
                    </tr>
                  </tbody>
                </table>
            </div>
            <div class='container'>
              <strong>Field Description :</strong>
              <p>".$field_description."</p>
            </div>
            ";
            if ($uni_name=="Bahria University" && strpos($field, 'BS(')!== false) {
              echo "<div class='container'>
               <p class='SemesterStyling'>".$field." Road Map<br>Semester 1 </p>
               <p>".$Semester_1."</p>
               <p class='SemesterStyling'>Semester 2 </p>
               <p>".$Semester_2."</p>
               <p class='SemesterStyling'>Semester 3 </p>
               <p>".$Semester_3."</p>
               <p class='SemesterStyling'>Semester 4 </p>
               <p>".$Semester_4."</p>
               <p class='SemesterStyling'>Semester 5 </p>
               <p>".$Semester_5."</p>
               <p class='SemesterStyling'>Semester 6 </p>
               <p>".$Semester_6."</p>
               <p class='SemesterStyling'>Semester 7 </p>
               <p>".$Semester_7."</p>
               <p class='SemesterStyling'>Semester 8 </p>
               <p>".$Semester_8."</p>
              </div>
              </div>";
            }
            else{
              echo "<div class='container'>
               <p class='SemesterStyling_1'>".$field." Road Map</p>
               <p>".$roadmap."</p>
              </div>
              </div>";
            }
			}
      else{ 
          echo "No Data in Database";
      }
        ?>
    </div>
           <?php
           $map_qry = "SELECT * from uni_details_table WHERE 
                province_name='".$province_name."' AND 
                city_name='".$city_name."' AND
                uni_name='".$uni_name."'";
          $map_result = mysqli_query($conn,$map_qry);
       
          if(mysqli_num_rows($map_result)>0){
            $row=mysqli_fetch_assoc($map_result);
            // $map = $row["map_link"];

            $address = $row["uni_name"]." ".
                       $row["city_name"]." ".
                       $row["province_name"];
            $address=str_replace(",", "", str_replace(" ", "+", $address));
            // $address = 'bahria+university+lahore+punjab';
            // echo $address; 
            echo "<div style='margin-top:4%;margin-bottom:4%;'>
                  <iframe width='100%' height='450' frameborder='0'
                  style='border:0;'src='https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=".$address."&z=14&output=embed'>
                  </iframe>
                </div>";
            // echo $address;
          }
          ?>
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

    
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    
    <script src="js/jquery.magnific-popup.min.js"></script>
 
    <script src="js/main.js"></script>
    <script src="js/functions.js"></script>
    <!-- Header Files In Footer -->
     <?php include("header_files_in_footer.php") ?>
    <!-- Header Files In Footer -->

    
    
  </body>
</html>