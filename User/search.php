<?php
$conn=mysqli_connect("localhost","root","","education_host_pk");
session_start();

if(isset($_POST["uni_name"])){
  $uni_name = $_POST["uni_name"];
}
else if(isset($_POST["field_name"])){
  $field_name = $_POST["field_name"];
}
else if(isset($_POST["university_name"]) && isset($_POST["field"]) ){
  $uni_name = $_POST["university_name"];
  $field = $_POST["field"];
}
else{
  $city = $_POST["city"];
  $field = $_POST["field"];
  $province = $_POST["province"];
}
// }
// else{
//   $province = "";
//   $city = "";
//   $field = ""; 
// }
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

    <section class="site-section element-animate">
    <div>
      <?php

        // table-bordered
        echo "  <div class='container table-responsive'>
                <table class='table'>
                  <thead class='uniDetailsHeadingStyling'>
                    <tr>
                      <th>Province</th>
                      <th>City</th>
                      <th>University Name</th>
                      <th>Field</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>";
    //0
    if(isset($_POST["field_name"])){
        $qry = "SELECT * from uni_details_table WHERE 
                field='".$field_name."'";
    }
    //-1
    else if(isset($_POST["uni_name"])){
        $qry = "SELECT * from uni_details_table WHERE 
                uni_name='".$uni_name."'";
    }
    //1
    else if (isset($_POST["university_name"]) && isset($_POST["field"])) {
        $qry = "SELECT * from uni_details_table WHERE 
                uni_name='".$uni_name."' AND
                field='".$field."' ";
    }
    // 1.1
    else if ($province == "Select Province" && $city == "Select City" && $field == "Select Field") {
        $qry = "SELECT * from uni_details_table";
        }
    // else if ($province == "" && $city == "" && $field == "") {
    //     $qry = "SELECT * from uni_table";
    //     }

    //2
    else if ($province == "Select Province" && $city == "Select City" && 
             $field != "Select Field") {
        $qry = "SELECT * from uni_details_table WHERE 
                field='".$field."'";
    }
    //3

    else if ($province != "Select Province" && $city == "Select City" && $field == "Select Field") {
        $qry = "SELECT * from uni_details_table WHERE 
                province_name='".$province."'";
        }
    // else if ($province == "Select Province" && $city != "Select City" && $field == "Select Field") {
    //     $qry = "SELECT * from uni_table WHERE 
    //             city='".$city."'";
    //     }
    //4
    else if ($province != "Select Province" && $city != "Select City" && $field == "Select Field") {
        $qry = "SELECT * from uni_details_table WHERE 
                province_name='".$province."' AND 
                city_name='".$city."'";
        }
    //5
    // else if ($province == "Select Province" && $city == "Select City" && $field != "Select Field") {
    //     $qry = "SELECT * from uni_table WHERE 
    //             province='".$province."' AND 
    //             city='".$city."' AND
    //             field='".$field."' ";
    //     }
    // 6
    // else if ($province != "Select Province" && $city == "Select City" && $field != "Select Field") {
    //     $qry = "SELECT * from uni_table WHERE 
    //             province='".$province."' AND 
    //             city='".$city."' AND
    //             field='".$field."' ";
    //     }
    // 7
    // else if ($province == "Select Province" && $city != "Select City" && $field != "Select Field") {
    //     $qry = "SELECT * from uni_table WHERE 
    //             province='".$province."' AND 
    //             city='".$city."' AND
    //             field='".$field."' ";
    //     }
    // 8
    else if ($province != "Select Province" && $city != "Select City" && $field != "Select Field") {
        $qry = "SELECT * from uni_details_table WHERE 
                province_name='".$province."' AND 
                city_name='".$city."' AND
                field='".$field."' ";
        }
    // 9
    // 10
    // 11
    // 12
    // 13
    // 14
    // 15
    // 16
        $res = mysqli_query($conn,$qry);

        while($row = mysqli_fetch_assoc($res)){
              echo "
                      <tr class='uniDetailsTDStyling'>
                        <td>".$row["province_name"]."</td>
                        <td>".$row["city_name"]."</td>
                        <td>".$row["uni_name"]."</td>
                        <td>".$row["field"]."</td>
                        <td><form action='uni_page.php' method='POST' target='_blank' class='d-block d-lg-flex mb-4'>
                        <input type='hidden' name='province_name' value='".$row["province_name"]."'>
                        <input type='hidden' name='city_name' value='".$row["city_name"]."'>
                        <input type='hidden' name='uni_name' value='".$row["uni_name"]."'>
                        <input type='hidden' name='field_name' value='".$row["field"]."'>
                        <input type='submit' class='search-submit btn' value='More Details'
                        style='background-color:#388087;color:white'> 
                      </form></td>
                      </tr>
                    ";
         }
         echo "</tbody>
                  </table></div>";
        ?>
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