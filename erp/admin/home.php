<?php 
session_start();
$id=$_SESSION["uid"];
$name=$_SESSION["namez"];

if(empty($id)) {
	header("Location:index.php");
}
include 'db.php';

$sql=mysqli_query($conn,"select COUNT(uid) as c from user");
$row=mysqli_fetch_array($sql);
$ccid=$row['c'];


?>


<html lang="en">
<head>
  <?php include 'head.php'; ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<?php
include 'header.php';
include 'sidebar.php';
?>
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">DASHBOARD</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-6">
            <div class="small-box bg-info">
              <div class="inner">
			 <?php
			$sql=mysqli_query($conn,"select COUNT(pid) as pid from product");
			$row=mysqli_fetch_array($sql);
             ?>
                <h3><?php echo $row['pid'];?></h3>
                <p>Total Products</p>
              </div>
              <!--<div class="icon">
               <i class="fa-product-hunt"></i>
              </div>-->
              <a href="product_main.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
         
		  
        </div>
        </div>
    </section>
  </div>
<?php include 'footer.php';?>
</body>
</html>
