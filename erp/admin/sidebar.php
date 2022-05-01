<?php include 'db.php';?>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="home.php" class="brand-link">
      <!-- unique store -->
      <span class="brand-text font-weight-light" style="color:white; font-size:20px;"><b> UNIQUE TRADES</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
     
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="home.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt" style="color:white;"></i>
              <p style="color:white; font-size:20px;">
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="profile.php" class="nav-link">
              <i class="nav-icon fas fa-copy" style="color:white;"></i>
              <p style="color:white; font-size:20px;">
                Profile
              </p>
            </a>
          </li>
          
          <!--<li class="nav-item">
            <a href="branch.php" class="nav-link">
              <i class="nav-icon far fa-calendar-alt" style="color:white;"></i>
              <p style="color:white; font-size:20px;">
                branch
              </p>
            </a>
          </li>-->
          
		  <li class="nav-item">
		    <a href="category.php" class="nav-link">
			  <i class="nav-icon fa fa-list-alt" style="color:white;"></i>
			  <p style="color:white; font-size:20px;">
			    Category
			  </p>
			 </a>
		  </li>
		  
		   <li class="nav-item">
		    <a href="subcategory.php" class="nav-link">
			  <i class="nav-icon fa fa-list-alt" style="color:white;"></i>
			  <p style="color:white; font-size:20px;">
			    Subcategory
			  </p>
			 </a>
		  </li>
		  
		   <li class="nav-item">
		    <a href="material.php" class="nav-link">
			  <i class="nav-icon far fa-plus-square" style="color:white;"></i>
			  <p style="color:white; font-size:20px;">
			    Material
			  </p>
			 </a>
		  </li>
		  
		   <li class="nav-item">
		    <a href="finish.php" class="nav-link">
			  <i class="nav-icon far fa-plus-square" style="color:white;"></i>
			  <p style="color:white; font-size:20px;">
			    Finish
			  </p>
			 </a>
		  </li>
		  
		  <li class="nav-item">
		    <a href="size.php" class="nav-link">
			  <i class="nav-icon fa fa-list-alt" style="color:white;"></i>
			  <p style="color:white; font-size:20px;">
			   Size
			  </p>
			 </a>
		  </li>
		  
		  <li class="nav-item">
		    <a href="product_main.php" class="nav-link">
			  <i class="nav-icon fas fa-book" style="color:white;"></i>
			  <p style="color:white; font-size:20px;">
			  Product
			  </p>
			 </a>
		  </li>
		  
		  <li class="nav-item">
		    <a href="collaboration.php" class="nav-link">
			  <i class="nav-icon fas fa-book" style="color:white;"></i>
			  <p style="color:white; font-size:20px;">
			  Collaboration
			  </p>
			 </a>
		  </li>
		  
		  <li class="nav-item">
		    <a href="bulk.php" class="nav-link">
			  <i class="nav-icon fas fa-book" style="color:white;"></i>
			  <p style="color:white; font-size:20px;">
			  Bulk orders
			  </p>
			 </a>
		  </li>
		  
		  <li class="nav-item">
		    <a href="corporate.php" class="nav-link">
			  <i class="nav-icon fas fa-book" style="color:white;"></i>
			  <p style="color:white; font-size:20px;">
			 Corporate Gifting
			  </p>
			 </a>
		  </li>
		  
		  <li class="nav-item">
		    <a href="orders.php" class="nav-link">
			  <i class="nav-icon fas fa-book" style="color:white;"></i>
			  <p style="color:white; font-size:20px;">
			  Orders 
			  </p>
			</a>
		  </li>
		  
		  <li class="nav-item">
		    <a href="approved.php" class="nav-link">
			  <i class="nav-icon fas fa-book" style="color:white;"></i>
			  <p style="color:white; font-size:20px;">
			Approved Orders 
			  </p>
			</a>
		  </li>
		  
		  <li class="nav-item">
		    <a href="dispblog.php" class="nav-link">
			  <i class="nav-icon fas fa-book" style="color:white;"></i>
			  <p style="color:white; font-size:20px;">
			Blog Posts
			  </p>
			</a>
		  </li>
		  
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon far fa-circle text-info" style="color:white;"></i>
              <p style="color:white; font-size:20px;">Log Out</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>