    <footer class="site-footer">
      <div class="container">
        <!-- mb-5 -->
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
            <h3>Education Host PK</h3>
            <p>Perferendis eum illum voluptatibus dolore tempora consequatur minus asperiores temporibus.</p>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
            <h3 class="heading">Quick Link</h3>
            <div class="row">
              <div class="col-md-6">
                <ul class="list-unstyled">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="about.php">About Us</a></li>
                  <li><a href="contact.php">Contact Us</a></li>
                  <li><a href="feedback_page.php">Feedback Us</a></li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="list-unstyled">
                  <li><a href="blog.php">Blog</a></li>
                  <li><a href="culture.php">Culture</a></li>
                  <li><a href="newsletter.php">Newsletter</a></li>
                  <li><a href="privacy_policy.php">Privacy Policy</a></li>
                
                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
            <h3 class="heading">Give Feedback</h3>
            <div class="block-23">
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
        <!-- pt-5 -->
        <div class="row ">
          <div class="col-md-12 text-center copyright">
            <p class="float-md-left">Copyright &copy; 2020 All rights reserved.</a>
            <p class="float-md-right">
              <a href="#" class="fa fa-facebook p-2"></a>
              <a href="#" class="fa fa-twitter p-2"></a>
              <a href="#" class="fa fa-linkedin p-2"></a>
              <a href="#" class="fa fa-instagram p-2"></a>

            </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->