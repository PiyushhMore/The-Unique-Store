<?php 
session_start();
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>The Unique Store</title>
  <!-- google-fonts -->
  <link
    href="//fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,400;1,600;1,700&display=swap"
    rel="stylesheet">
  <!-- //google-fonts -->
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <style>
  .w3l-index
       {
	   margin-top:-120px;
       }
	   </style>
</head>

<body>
  <!--header-->
 <?php include 'nav.php';?>
  <!--//header-->
  <!-- inner banner -->
  <div class="inner-banner">
    <section class="w3l-breadcrumb14">
      <div class="container">
        <ul class="breadcrumbs14-custom-path">
          <li><a href="index.php">Home</a></li>
		  <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Nakshi</li>
        </ul>
      </div>
    </section>
  </div>
 
  <section class="w3l-index py-5">
        <div class="container py-md-4 py-3">
            <div class="title-heading-w3 text-center mx-auto">
                <h3 class="title-main">Nakshi</h3>
            </div>
            <div class="row bottom_grids mt-5 pt-lg-3">
					<?php 
					$sql=mysqli_query($conn,"select * from product as p LEFT JOIN subcategory  as s ON p.spname=s.sid where s.sid='2'" );
					while($row=mysqli_fetch_array($sql)) {
					?>
                <div class="col-lg-3 col-md-6 px-lg-2 mt-md-0 mt-4 grid-4-col">
                    <div class="s-block">
                        <a href="product.php?pid=<?php echo $row['pid'];?>" class="d-block">
                            <img src="assets/images/<?php echo $row['image1']; ?>" alt="" class="img-fluid img-responsive" />
                            <div class="p-3">
                                <center><h3 class="mb-2"><?php echo $row['pname']; ?></h3>
								 <p><?php echo $row['description'];?></p>
								<strong class="fee-class-w3 mt-3">&#8377;<?php echo $row['price'];?></strong>
                               
                                </center>
                            </div>
                        </a>
                    </div>
					</div>
					<?php  } ?>
					
            </div>
        </div>
	</section>
	
	
	<?php include 'footer.php';?>
	</body>
	</html>