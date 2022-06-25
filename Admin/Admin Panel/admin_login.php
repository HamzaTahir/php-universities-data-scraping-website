<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin Panel Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
  </head>
<style type="text/css">
.bodyStyling{
  background-color: white; 
  position: absolute;
  top: 50%;
  left: 50%;
  -moz-transform: translateX(-50%) translateY(-50%);
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
}
</style>
  <body class="bodyStyling">
    <section>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
            <div class="form-wrap">
              <h2 class="mb-4">Log in Admin account</h2>
              <form action="admin_get.php" method="post">
                <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 form-group">
                    <label for="email">Email</label>
                    <input type="email"name="admin_email" class="form-control py-2" required="required">
                  </div>
                </div>
                <div class="row ">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 form-group">
                    <label for="password">Password</label>
                    <input type="password" name="admin_password" class="form-control py-2" required="required">
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 form-group" style="text-align: center;">
                    <input type="submit" value="Login" class="btn btn-primary px-5 py-2" style="background-color: #388087;">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="js/jquery-3.2.1.min.js"></script>
  </body>
</html>