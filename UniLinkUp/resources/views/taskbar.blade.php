<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style_tb.css') }} "/>
  </head>
  <body>
  
  

    <!-- sidebar -->
    <nav class="taskbar">
         <i class="bx bx-menu" id="sidebarOpen"></i>
    </nav>

    

    <nav class="sidebar">
      <div class="menu_content">
        <ul class="menu_items">
          <div class="menu_title menu_dahsboard"></div>
          <!-- duplicate or remove this li tag if you want to add or remove navlink with submenu -->
          <!-- start -->

          <li class="item">
            <a href="admin.php" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-home-alt"></i>
              </span>
              <span class="navlink">Home</span>
           </a>
          </li>

          <li class="item">
            <a href="#" class="nav_link submenu_item">
              <span class="navlink_icon">
                <i class="bx bx-folder-plus"></i>
              </span>
              <span class="navlink">Create Accounts</span>
              <i class="bx bx-chevron-right arrow-left"></i>
            </a>
          

            <ul class="menu_items submenu">
              <a href="#" class="nav_link sublink">Viewer</a>
              <a href="#" class="nav_link sublink">Editor</a>
              <a href="#" class="nav_link sublink">Moderator</a>
              <a href="#" class="nav_link sublink">Staff</a>
            </ul>
            </li>

              <div href="#" class="nav_link submenu_item">
              <span class="navlink_icon">
                <i class="bx bx-folder-minus"></i>
              </span>
              <span class="navlink">Remove Accounts</span>
              <i class="bx bx-chevron-right arrow-left"></i>
            </div>

            <ul class="menu_items submenu">
              <a href="admin_UMV.php" class="nav_link sublink">Viewer</a>
              <a href="admin_UME.php" class="nav_link sublink">Editor</a>
              <a href="admin_UMM.php" class="nav_link sublink">Moderator</a>
              <a href="admin_UMA.php" class="nav_link sublink">Admin</a>
            </ul>
          </li>
                   
        

          <li class="item">
            <a href="admin_Role_UMR.php" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-face"></i>
              </span>
              <span class="navlink">Roles</span>
            </a>
          </li>
          <li class="item">
            <a href="admin_societies.php" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-news"></i>
              </span>
              <span class="navlink">Societies</span>
            </a>
          </li>

        <!-- Sidebar Open / Close -->
        <div class="bottom_content">
          <div class="bottom expand_sidebar">
            <span> Expand</span>
            <i class='bx bx-log-in' ></i>
          </div>
        
          <div class="bottom collapse_sidebar">
            <span> Collapse</span>
            <i class='bx bx-log-out'></i>
          </div>
        </div>
      </div>
    </nav>
    <!-- JavaScript -->
    <script src="js/script_tb.js"></script>
  </body>
</html>