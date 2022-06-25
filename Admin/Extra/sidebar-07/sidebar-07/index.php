<!doctype html>
<html lang="en">
  <head>
    <title>Admin Panel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
<style type="text/css">
.dashboard_small_boxes{
  height: 90%;
  color: white;
  font-size: 30px;
  padding-top: 5%;
  padding-bottom: 5%;
  text-align: center;
  margin-bottom: 10%;
  border: 2px solid transparent;
  border-radius: 8px;
}
.dashboard_small_boxes_1{
  background-color: #17A2B8; 
}
.dashboard_small_boxes_2{
  background-color: #28A745;  
}
.dashboard_small_boxes_3{
  background-color: #FFC107; 
}
.dashboard_small_boxes_4{
  background-color: #3B599A; 
}
.dashboard_small_boxes_5{
  background-color: #563D7C; 
}
.dashboard_small_boxes_6{
  background-color: #1F8BFF; 
}
.dashboard_small_boxes_7{
  background-color: #DC3545; 
}
.dashboard_small_boxes_8{
  background-color: #17A2B8; 
}
</style>
  <body>
    
    <div class="wrapper d-flex align-items-stretch">
      <nav id="sidebar" class="active">
        <!-- <h1><a href="index.html" class="logo">M.</a></h1> -->
        <h1><a href="index.php" class="logo"></a></h1>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="index.php"><span class="fa fa-home"></span> Home</a>
          </li>
          <li>
            <a href="admin.php"><span class="fa fa-user"></span> Admin</a>
          </li>
          <li>
            <a href="user.php"><span class="fa fa-user-o"></span> User</a>
          </li>
          <li>
            <a href="province.php"><span class="fa fa-building-o"></span> Province</a>
          </li>
          <li>
            <a href="city.php"><span class="fa fa-building-o"></span> City</a>
          </li>
          <li>
            <a href="university.php"><span class="fa fa-university"></span> University</a>
          </li>
          <li>
            <a href="field.php"><span class="fa fa-flask"></span> Field</a>
          </li>
          <li>
            <a href="map.php"><span class="fa fa-globe"></span> Map</a>
          </li>
        </ul>

        <div class="footer">
          <p>
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</a>
          </p>
        </div>
      </nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">
<!-- 
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
              </ul>
            </div>
          </div>
        </nav> -->

        <h2 class="mb-4">Home Page</h2>
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 col-12">
              <div class="dashboard_small_boxes dashboard_small_boxes_1">
                <span class="fa fa-user"><br>
                Total Admin<br>
                00
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 col-12">
              <div class="dashboard_small_boxes dashboard_small_boxes_2">
                <span class="fa fa-user-o"><br>
                Total User<br>
                00
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 col-12">
              <div class="dashboard_small_boxes dashboard_small_boxes_3">
                <span class="fa fa-building"><br>
                Total Province<br>
                00
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 col-12">
              <div class="dashboard_small_boxes dashboard_small_boxes_4">
                <span class="fa fa-building"><br>
                Total City<br>
                00
              </div>
            </div>
          </div>
         <div class="row" style="margin-top: 6%;">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 col-12">
              <div class="dashboard_small_boxes dashboard_small_boxes_5">
                <span class="fa fa-university"><br>
                Total University<br>
                00
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 col-12">
              <div class="dashboard_small_boxes dashboard_small_boxes_6">
                <span class="fa fa-flask"><br>
                Total Field<br>
                00
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 col-12">
              <div class="dashboard_small_boxes dashboard_small_boxes_7">
                <span class="fa fa-globe"><br>
                Total Map<br>
                00
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 col-12">
              <div class="dashboard_small_boxes dashboard_small_boxes_8">
                <span class="fa fa-user"><br>
                Total City<br>
                00
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>