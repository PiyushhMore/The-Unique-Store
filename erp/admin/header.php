
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
     <!--<li class="nav-item d-none d-sm-inline-block">
        <a href="home.php" class="nav-link"><img src="../images/logo.jpg" alt="AdminLTE Logo" width="220" height="50" style="margin-top:-17px;"></a>
      </li> -->
     </ul>

   
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
	<li class="nav-item">
        <a class="nav-link" class="brand-link"   href="#" role="button">
         <label style="color:black; font-size:18px;" > <i class="nav-icon far fa-circle text-info"></i> Welcome <?php echo $name; ?>... </label>
        </a>
      </li>
	  
	  <li class="nav-item">
        <a class="nav-link" class="brand-link"   href="logout.php" role="button">
         <i class="nav-icon far fa-circle text-info"></i> <label style="color:black; font-size:18px;">Log Out</label> </a>
      </li>
	
      <li class="nav-item">
        <a class="nav-link"  data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->