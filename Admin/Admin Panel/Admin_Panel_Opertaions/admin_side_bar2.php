  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="index.php">Admin Panel</a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <div class="sidebar-header">
        <div class="user-pic">
          <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
            alt="User picture">
        </div>
        <div class="user-info">
          <span class="user-name">
            <?php if (isset($_SESSION["first_name"])) 
              { 
            ?>
              <span>
                <?php  echo $_SESSION["first_name"];?>
              </span>
            <?php } else {?>
              <span>
                John Doe
              </span>
            <?php }?>
          </span>
          <span class="user-role">Administrator</span>
          <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>Online</span>
          </span>
        </div>
      </div>
      <!-- sidebar-search  -->
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>General</span>
          </li>
          <li class="sidebar-dropdown">
            <a href="../../admin.php">
              <i class="fa fa-home"></i>
              <span>Home</span>
            </a>
        
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-user"></i>
              <span>Admin</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="../../Admin_Panel_Opertaions/admin/add_admin.php">Add Admin</a>
                </li>
                <li>
                  <a href="../../Admin_Panel_Opertaions/admin/update_admin.php">Update Admin</a>
                </li>
                <li>
                  <a href="../../Admin_Panel_Opertaions/admin/delete_admin.php">Delete Admin</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-user"></i>
              <span>User</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="../../Admin_Panel_Opertaions/user/add_user.php">Add User</a>
                </li>
                <li>
                  <a href="../../Admin_Panel_Opertaions/user/update_user.php">Update User</a>
                </li>
                <li>
                  <a href="../../Admin_Panel_Opertaions/user/delete_user.php">Delete User</a>
                </li>
              </ul>
            </div>
          </li>
          <!-- <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-building"></i>
              <span>Province</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="../../Admin_Panel_Opertaions/province/add_province.php">Add Province</a>
                </li>
                <li>
                  <a href="../../Admin_Panel_Opertaions/province/update_province.php">Update Province</a>
                </li>
                <li>
                  <a href="../../Admin_Panel_Opertaions/province/delete_province.php">Delete Province</a>
                </li>
              </ul>
            </div>
          </li> -->
         <!--  <li class="header-menu">
            <span>Extra</span>
          </li> -->
          <!-- <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-building"></i>
              <span>Cities</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="../../Admin_Panel_Opertaions/city/add_city.php">Add City</a>
                </li>
                <li>
                  <a href="../../Admin_Panel_Opertaions/city/update_city.php">Update City</a>
                </li>
                <li>
                  <a href="../../Admin_Panel_Opertaions/city/delete_city.php">Delete City</a>
                </li>
              </ul>
            </div>
          </li> -->
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-university"></i>
              <span>Universities</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="../../Admin_Panel_Opertaions/university/add_university.php">Add University</a>
                </li>
                <li>
                  <a href="../../Admin_Panel_Opertaions/university/delete_university.php">Delete University</a>
                </li>
                <li>
                  <a href="../../Admin_Panel_Opertaions/university/update_university.php">Update University</a>
                </li>
              </ul>
            </div>
          </li>
          <!-- <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-flask"></i>
              <span>Fields</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="../../Admin_Panel_Opertaions/field/add_field.php">Add Field</a>
                </li>
                <li>
                  <a href="../../Admin_Panel_Opertaions/field/delete_field.php">Delete Field</a>
                </li>
                <li>
                  <a href="../../Admin_Panel_Opertaions/field/update_field.php">Update Field</a>
                </li>
              </ul>
            </div>
          </li>
          <li>
               <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-globe"></i>
              <span>Maps</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                 <a href="../../Admin_Panel_Opertaions/map/add_map.php">Add Map</a>
                </li>
                <li>
                  <a href="../../Admin_Panel_Opertaions/map/delete_map.php">Delete Map</a>
                </li>
                <li>
                  <a href="../../Admin_Panel_Opertaions/map/update_map.php">Update Map</a>
                </li>
              </ul>
            </div>
          </li> -->
          <li>
            <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-globe"></i>
              <span>Culture</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                 <a href="../../Admin_Panel_Opertaions/culture/add_culture.php">Add Culture</a>
                </li>
                <li>
                  <a href="../../Admin_Panel_Opertaions/culture/delete_culture.php">Delete Culture</a>
                </li>
                <li>
                  <a href="../../Admin_Panel_Opertaions/culture/update_culture.php">Update Culture</a>
                </li>
              </ul>
            </div>
          </li>
           <li>
            <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-globe"></i>
              <span>Post</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                 <a href="../../Admin_Panel_Opertaions/post/add_post.php">Add Post</a>
                </li>
                <li>
                  <a href="../../Admin_Panel_Opertaions/post/delete_post.php">Delete Post</a>
                </li>
                <li>
                  <a href="../../Admin_Panel_Opertaions/post/update_post.php">Update Post</a>
                </li>
              </ul>
            </div>
          </li>
           <li>
            <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-globe"></i>
              <span>Subscribe</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                 <a href="../../Admin_Panel_Opertaions/subsciption/add_subsciption.php">Add Subscribe</a>
                </li>
                <li>
                  <a href="../../Admin_Panel_Opertaions/subsciption/delete_subsciption.php">Delete Subscribe</a>
                </li>
                <li>
                  <a href="../../Admin_Panel_Opertaions/subsciption/update_subsciption.php">Update Subscribe</a>
                </li>
              </ul>
            </div>
          </li>
           <li>
            <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-globe"></i>
              <span>Feedback</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                 <a href="../../Admin_Panel_Opertaions/feedback/add_feedback.php">Add Feedback</a>
                </li>
                <li>
                  <a href="../../Admin_Panel_Opertaions/feedback/delete_feedback.php">Delete Feedback</a>
                </li>
                <li>
                  <a href="../../Admin_Panel_Opertaions/feedback/update_feedback.php">Update Feedback</a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-globe"></i>
              <span>Contact</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                 <a href="../../Admin_Panel_Opertaions/contact/add_contact.php">Add Contact</a>
                </li>
                <li>
                  <a href="../../Admin_Panel_Opertaions/contact/delete_contact.php">Delete Contact</a>
                </li>
                <li>
                  <a href="../../Admin_Panel_Opertaions/contact/update_contact.php">Update Contact</a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    <div class="sidebar-footer">
      <a href="admin_logout.php">
        <i class="fa fa-power-off"></i>
        <span>Logout</span>
      </a>
    </div>
  </nav>