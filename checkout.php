<?php 
error_reporting(null);
session_start();
$uid=$_SESSION['uid'];
include 'db.php'; 

?>

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
		.w3l-contacts-12
       {
	   margin-top:-120px;
       }
   @media screen and (max-width: 600px) {
	   .w3l-contacts-12{
		   margin-top:-70px;
	   }
   }
   </style>
</head>

<body>
    <!--header-->
    <?php include 'nav.php';?>
    <!--//header-->
    <!-- inner banner -->
    <div class="inner-banner">
        <section class="w3l-breadcrumb6">
            <div class="container">
                <ul class="breadcrumbs6-custom-path">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Checkout</li>
                </ul>
            </div>
        </section>
    </div>
	
	<section class="w3l-contacts-12">
        <div class="contact-top pt-5">
            <div class="container py-md-4 py-3">
                <div class="title-heading-w3 text-center mx-auto">
                    <h3 class="title-main">Checkout</h3>
                </div>
                <div class="d-grid cont-main-top mt-5">
                    <!-- contact form -->
                    <div class="contacts12-main mt-lg-2">
                        
						<?php
                            $sql=mysqli_query($conn,"select * from user where uid='$uid'");
						$row=mysqli_fetch_array($sql)
						?>
						
                            <label><h3>&#8226;Address:</h3></label>
							<textarea  rows="2" name="address"  id="w3lName" required><?php echo $row['address'];?></textarea>
							<br>
							
						<a href="register1.php" style="font-size:19px;">Add New Address</a>
							<br><br>
						
                            <a href="payment.php" style="font-size:19px;"><button class="btn btn-warning btn-style mt-4" name="proceed" style=" height:40px; font-size:16px;">Proceed to Payment</button></a><br><br>
							
                       
						</div>
                    <!-- //contact form -->
                    <!-- contact address -->
                   <div class="contact">
                        <div class="cont-subs">
                            <div class="cont-add">
                                <h4>Address:</h4>
                                <p class="contact-text-sub">Shop no. 103, Meenatai Thakre Market , Savta Nagar ,Nashik- 422008. Maharashtra, India</p>
                            </div>
                            <div class="cont-add">
                                <h4>Email:</h4>
                                <a href="mailto:thestoretheunique@gmail.com">
                                    <p class="contact-text-sub">– thestoretheunique@gmail.com</p>
                                </a>
                            </div>
                            <div class="cont-add">
                                <h4>Phone:</h4>
                                <a href="mobile:7020839958">
                                    <p class="contact-text-sub"> +91-7020839958</p>
                                </a>
                            </div>
                            <div class="social-icons-con">
                                <a href="https://www.facebook.com/profile.php?id=100081175116132" ><span class="fa fa-facebook" aria-hidden="true"></span></a>
                                <a href="https://www.instagram.com/theuniquethestore/"><span class="fa fa-instagram" aria-hidden="true"></span></a>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
    </section>
	
	<?php include 'footer.php';?>

</body>
</html>