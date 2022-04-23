<?php 
  session_start();
 include 'connect.php';
 ?>

<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Welcomr To Our Admin</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
     

      <!-- Nav Item - Pages Collapse Menu -->
    

      <!-- Heading -->
     

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Login&Register</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.php">Login</a>
            <a class="collapse-item" href="register.php">Register</a>
          </div>
        </div>
      </li>


            <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProduct" aria-expanded="true" aria-controls="collapseProduct">
          <i class="fas fa-fw fa-folder"></i>
          <span>Products</span>
        </a>
        <div id="collapseProduct" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            
            
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Products Pages:</h6>
            <a class="collapse-item" href="product.php">Products</a>
            <a class="collapse-item" href="product_list.php">Products List</a>
          </div>
        </div>
      </li> 



      <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategory" aria-expanded="true" aria-controls="collapseCategory">
          <i class="fas fa-fw fa-folder"></i>
          <span>Category</span>
        </a>
        <div id="collapseCategory" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            
            
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Category Pages:</h6>
            <a class="collapse-item" href="add_category.php">Add Category</a>
            <a class="collapse-item" href="category_list.php">Category List</a>
          </div>
        </div>
      </li>


      <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseType" aria-expanded="true" aria-controls="collapseType">
          <i class="fas fa-fw fa-folder"></i>
          <span>Type</span>
        </a>
        <div id="collapseType" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            
            
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Type Pages:</h6>
            <a class="collapse-item" href="type_add.php">Add Type</a>
            <a class="collapse-item" href="type_list.php">Type List</a>
          </div>
        </div>
      </li>



      <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOther" aria-expanded="true" aria-controls="collapseOther">
          <i class="fas fa-fw fa-folder"></i>
          <span>Other</span>
        </a>
        <div id="collapseOther" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            
            
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="order_management.php">Order Management</a>
            <a class="collapse-item" href="user_list.php">User List</a>
            <a class="collapse-item" href="noti.php">Notification</a>
            
          </div>
        </div>
      </li>


      <!-- Nav Item - Charts -->
    

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

           

            
          <!--Dropdown Message-->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">
                  <?php
                    global $connection;
                    $msg = "select * from contact";
                    $go_msg = mysqli_query($connection,$msg);
                    $count = mysqli_num_rows($go_msg);
                    echo $count ?>
                      
                </span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                  <?php  
                    global $connection;
                    $msg = "select * from contact";
                    $go_msg = mysqli_query($connection,$msg);
                    $count = mysqli_num_rows($go_msg);
                    while ($allmsg = mysqli_fetch_assoc($go_msg)) {
                      
                    
                  ?>
                      <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="dropdown-list-image col-md-6">
                          <p><?php echo $allmsg['name'] ?></p>
                        </div>
                        <div class="font-weight-bold col-md-6">
                          <div class="text-truncate"><?php echo $allmsg['message'] ?></div>
                        </div>
                      </a>
                  <?php } ?>
              </div>
            </li>
            

            

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php 
                     echo $_SESSION['admin'];

                   ?>
              </a>
              
            </li>

          </ul>

        </nav>