<?php include("scss/buttons2.php") ?>
 <header role="banner">
     
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand absolute" href="index.php">Education Host PK</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
 
          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link active" href="index.php">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Fields</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <?php
                  $conn=mysqli_connect("localhost","root","","education_host_pk");
                  $qry = "SELECT Distinct field from uni_details_table ORDER BY RAND() LIMIT 5";
                  $res = mysqli_query($conn,$qry);
                  while($row = mysqli_fetch_assoc($res)){
                    echo "
                     <form action='search.php' method='POST'>
                    <input type='hidden' name='field_name' 
                     value='".$row['field']."'>
                    <input type='submit' class='search-submit btn dropdown-item' value='".$row['field']."' style='border-radius: 0px;padding-top: 7px;padding-bottom: 7px;transition: .3s all ease;text-decoration: none;'>  
                  </form>
                  "; 
                    }
              ?>
                </div>

              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Universities</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                   <?php
                  $conn=mysqli_connect("localhost","root","","education_host_pk");
                  $qry = "SELECT Distinct uni_name from uni_details_table ORDER BY RAND() LIMIT 5";
                  $res = mysqli_query($conn,$qry);
                  while($row = mysqli_fetch_assoc($res)){
                    echo "
                    <form action='search.php' method='POST'>
                    <input type='hidden' name='uni_name' 
                     value='".$row['uni_name']."'>
                    <input type='submit' class='search-submit btn dropdown-item' value='".$row['uni_name']."'
                      style='border-radius: 0px;padding-top: 
                      7px;padding-bottom: 7px;transition: .3s all 
                      ease;text-decoration: none;'>  
                  </form>
                  ";
                    }
              ?>
                </div>

              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Culture</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                  <?php
                  $conn=mysqli_connect("localhost","root","","education_host_pk");
                  $qry = "SELECT province_name from culture";
                  $res = mysqli_query($conn,$qry);
                  while($row = mysqli_fetch_assoc($res)){
                    echo "
                    <form action='culture_page.php' method='POST'>
                    <input type='hidden' name='province_name' 
                     value=".$row['province_name'].">
                    <input type='submit' class='search-submit btn dropdown-item' 
                      value=".$row['province_name']." 
                      style='border-radius: 0px;    padding-top: 
                      7px;padding-bottom: 7px;transition: .3s all 
                      ease;text-decoration: none;'>  
                  </form>
                  ";
                    }
              ?>
                </div>

              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog.php">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
              
            </ul>
            <ul class="navbar-nav ">
              <li>
                <?php if (isset($_SESSION["first_name"])) 
                  { 
                    ?>
                      <a class="checking">
                          <?php  echo $_SESSION["first_name"];?>
                      </a>
                         <a href="logout.php">Logout</a>
                   <?php } else {?>
                          <a href="login.php">Login</a> / <a href="register.php">Register</a>
                   <?php }?>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </header>
<!-- END header -->
