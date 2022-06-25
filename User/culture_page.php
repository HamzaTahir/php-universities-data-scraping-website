<?php
$conn=mysqli_connect("localhost","root","","education_host_pk");
session_start();
if (!isset($_POST["province_name"])) {
    echo "<script>
        window.location.href='index.php';
        </script>";
}
else{
  $province_name = $_POST["province_name"];
}
?> 
<!DOCTYPE html>
<html lang="en">
  <!-- Header -->
     <?php include("header_files.php") ?>
  <!-- Header -->
<script type="text/javascript">
// $("div.l-section").find("a").each(function(){
//     var linkText = $(this).text();
//     $(this).before(linkText);
//     $(this).remove();
// });
// $('a').contents().unwrap();
function myFunction() {
  var x = document.getElementsByTagName("a");
  var i;
  for (i = 0; i < x.length; i++) {
    x[i].href = '';
  }
}
</script>
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
           $qry = "SELECT * from culture WHERE 
                   province_name='".$province_name."' ";
        	$result = mysqli_query($conn,$qry);
   		
	    if(mysqli_num_rows($result)==1){
		  	$row=mysqli_fetch_assoc($result);
        $province_name = $row["province_name"];
        $image = $row["image"];
        $title = $row["title"];
				$content = $row["content"];
        echo "<div>
              <img src= ".$image." class='responsive'
                   style='display: block;margin-left: auto;margin-right: auto;'>
              </img>
              <h3 class='container Change_p_Styling' style='margin-top:1%;font-weight:500'>
                  ".$title."
              </h3>
              <div class='container' style='margin-top:1%;'>
                  ".$content."
              </div>
            </div>";
			}
      else{ 
          echo "No Data in Database";
      }
        ?>
    </div>
     <?php
           $map_qry = "SELECT * from culture WHERE 
                province_name='".$province_name."'";
          $map_result = mysqli_query($conn,$map_qry);
      
          if(mysqli_num_rows($map_result)>0){
            $row=mysqli_fetch_assoc($map_result);
            $map = $row["map"];
            echo "<div style='margin-top:4%;margin-bottom:4%;'>
                  <iframe src='".$map."' width='100%' height='450' frameborder='0' style='border:0;' allowfullscreen='' aria-hidden='false' tabindex='0'></iframe>
                </div>";
          }
          echo "<input type='hidden' name='province_name' 
                  value='$province_name'  id='province_name'>";
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

    <!-- Header Files In Footer -->
     <?php include("header_files_in_footer.php") ?>
    <!-- Header Files In Footer -->

    
    
  </body>
</html>