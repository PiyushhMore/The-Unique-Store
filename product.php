<?php 
session_start();
$pid=$_GET['pid'];

include 'db.php';
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>The Unique Store</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="assets/css/cart.css" rel="stylesheet" type="text/css" media="all" />
	<link href="assets/css/font-awesome.css" rel="stylesheet">
	<!--pop-up-box-->
	<link href="assets/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" type="text/css" href="assets/css/jquery-ui1.css">
	<!-- flexslider -->
	<link rel="stylesheet" href="assets/css/flexslider.css" type="text/css" media="screen"/>
	

  <link rel="stylesheet" href="assets/css/style-starter.css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />


<style>

@media screen and (max-width: 600px) {
	.image1{
	width:280px;
	height:500px:
	
}
.breadcrumbs1-custom-path li{
	 margin-left:200px;
}
.w3l-index-block2
{
	margin-top:-250px;
}
.w3l-index 
{
	margin-top:-400px;
}
.a1{
	margin-top:30px;
	margin-left:20px;
}
.b1{
	display:none;
}
.c1{
	display:none;
}
.w3l-banner{
	margin-top:20px;
}
.navbar-toggler{
	margin-left:10px;
	margin-top:20px;
}
}
*, *:before, *:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

.form-group {
  display: block;
  margin-bottom: 15px;
  
}

.form-group input {
  padding: 0;
  height: initial;
  width: initial;
  margin-bottom: 0;
  display: none;
  cursor:pointer;
}

.form-group label {
  position: relative;
  cursor: pointer;
  font-size:18px;
}

.form-group label:before {
  content:'';
  -webkit-appearance: none;
  background-color: transparent;
  border: 2px solid black;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05), inset 0px -15px 10px -12px rgba(0, 0, 0, 0.05);
  padding: 10px;
  display: inline-block;
  position: relative;
  vertical-align: middle;
  cursor: pointer;
  margin-right: 8px;
  
}

.form-group input:checked + label:after {
  content: '';
  display: block;
  position: absolute;
  top: 2px;
  left: 9px;
  width: 6px;
  height: 14px;
  border: solid black;
  border-width: 0 2px 2px 0;
  transform: rotate(45deg);
}
#number{
	text-align:center;
}
.button{
	width:5%;
	font-size:15px;
}


.checkbox {
  padding-left: 20px;
}

.checkbox label {
  display: inline-block;
  vertical-align: middle;
  position: relative;
  padding-left: 5px;
}

.checkbox label::before {
  content: "";
  display: inline-block;
  position: absolute;
  width: 17px;
  height: 17px;
  left: 0;
  margin-left: -20px;
  border: 1px solid #cccccc;
  border-radius: 3px;
  background-color: #fff;
  -webkit-transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
  -o-transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
  transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
}

.checkbox label::after {
  display: inline-block;
  position: absolute;
  width: 16px;
  height: 16px;
  left: 0;
  top: 0;
  margin-left: -20px;
  padding-left: 3px;
  padding-top: 1px;
  font-size: 11px;
  color: #555555;
}

.checkbox input[type="checkbox"] {
  opacity: 0;
  z-index: 1;
}


.checkbox input[type="checkbox"]:checked + label::after {
  font-family: 'FontAwesome';
  content: "\f00c";
}

.checkbox input[type="checkbox"]:disabled + label {
  opacity: 0.65;
}

.checkbox input[type="checkbox"]:disabled + label::before {
  background-color: #eeeeee;
  cursor: not-allowed;
}

.checkbox.checkbox-circle label::before {
  border-radius: 50%;
}

.checkbox.checkbox-inline {
  margin-top: 0;
}
.checkbox-primary input[type="checkbox"]:checked + label::before {
  background-color: #428bca;
  border-color: #428bca;
}

.checkbox-primary input[type="checkbox"]:checked + label::after {
  color: #fff;
}

.checkbox input[type="checkbox"]:checked + label::before {
  background-color: #428bca;
  border-color: #428bca;
}

.checkbox input[type="checkbox"]:checked + label::after {
  color: #fff;
}

.checkbox-success input[type="checkbox"]:checked + label::before {
  background-color: #428bca;
  border-color: #428bca;
}

.checkbox-success input[type="checkbox"]:checked + label::after {
  color: #fff;
}

</style>
</head>

<body>
    <!--header-->
  <?php include 'nav.php'; ?>
  <!--//header-->
  <div class="inner-banner">
    <section class="w3l-breadcrumb2">
      <div class="container">
        <ul class="breadcrumbs2-custom-path">
		<!--<?php
		$sql=mysqli_query($conn,"select * from product where pid='$pid'" );
					while($row=mysqli_fetch_array($sql)) {
					?>
          <li><a href="index.php">Home</a></li><p>
          <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span><?php/* echo $row['pname'];*/?></li>-->
        </ul></p>
		</div>
    </section>
  </div>
  
  <!-- inner banner -->
  
  <div class="banner-bootom-w3-agileits">
		<div class="container">
			<!-- tittle heading -->
			
			<!-- //tittle heading -->
			<div class="col-md-5 single-right-left ">
				<div class="grid images_3_of_2">
					<div class="flexslider">
						<ul class="slides">

							<li data-thumb="assets/images/<?php echo $row['image1'];?>"">
								<div class="thumb-image">
									<img src="assets/images/<?php echo $row['image1'];?>" data-imagezoom="true" class="img-responsive" alt=""> </div>
							</li>
							<li data-thumb="assets/images/<?php echo $row['image2'];?>">
								<div class="thumb-image">
									<img src="assets/images/<?php echo $row['image2'];?>"" data-imagezoom="true" class="img-responsive" alt=""> </div>
							</li>
							<li data-thumb="assets/images/<?php echo $row['image3'];?>"">
								<div class="thumb-image">
									<img src="assets/images/<?php echo $row['image3'];?>"" data-imagezoom="true" class="img-responsive" alt=""> </div>
							</li>
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="col-md-7 single-right-left simpleCart_shelfItem">
					<h3><?php echo $row['pname'];?></h3>
					<p>
					<span class="item_price"><b>&#8377;<?php echo $row['price'];?> (inclusive of all taxes)<b></span>
					<!--<del>$1300.00</del>
					<label>Free delivery</label>
					</p>-->
				<!--<div class="single-infoagile">
					<ul>
						<li>
							Cash on Delivery Eligible.
						</li>
						<li>
							Shipping Speed to Delivery.
						</li>
						<li>
							1 offer from
							<span class="item_price">&#8377;900</span>
						</li>
					</ul>
				</div>-->
				<div class="product-single-w3l">
					<p>
						Description : <?php echo $row['description'];?></p>
						<p>Product Information:<?php echo $row['product_information'];?></p>
						<p>Care Instructions:<?php echo $row['care_instructions'];?></p>
					<ul>
						<li>
							Colour:&nbsp;<?php echo $row['colour'];?>
						</li>
						<form method="post" action="cart.php">

						<div class="container">
 
    <div class="row">
      <div class="col-md-4">
        
        <p><b>Customization checklist:</b></p>
          <div class="checkbox">
            <input id="checkbox1" type="checkbox" name="customization[]" value="design">
            <label for="checkbox1" style="color:black; font-size:17px;">
			 Design</label>
          </div>
		  
          <div class="checkbox checkbox-primary">
            <input id="checkbox2" type="checkbox" name="customization[]" value="color">
            <label for="checkbox2" style="color:black; font-size:17px;">
            Color</label>
          </div>
		  
		 <div class="checkbox checkbox-success">
            <input id="checkbox3" type="checkbox" name="customization[]" value="personalized upper design">
            <label for="checkbox3" style="color:black; font-size:17px;">
            Personalized upper design</label>
         </div>
		 
      </div>
    </div>
  </div>
<br>
						
				<li style="font-size:15px;">Quantity:
				<input type="button" onclick="decrementValue()" value="-" class="button"/>
				<input type="text" name="quantity" value="1" maxlength="2" max="10" size="1" id="number" />
				<input type="button" onclick="incrementValue()" value="+" class="button"/>
				</li><br>
				
				<div class="form-group">
			    <input type="checkbox" id="html" name="gifting" value="yes">
			    <label for="html">The product contains gifting</label>
			     </div>
						
					<input type="hidden" name="pid" value="<?php echo $row['pid'];?>">
						
					</ul><br>
					<input type="submit" class="btn btn-warning btn-style" style=" height: 45px;  width: 130px; text-align:center; font-size:18px; padding-top: 10px;" name="submit" value="Add To Cart">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
			<input type="submit" class="btn btn-warning btn-style" style=" height: 45px;  width: 130px; text-align:center; font-size:18px; padding-top: 10px;" name="buynow" value="Buy Now">
			
			<!--<a class="btn btn-warning btn-style" style="height:45px;  width: 130px; text-align:center; font-size:18px; padding-top: 10px;" href="buynow.php?pid=<?php /*echo $row['pid'];*/?>">Buy Now</a>-->
			
					</div><?php } ?>
				</form><br><br>
				
				<p>Note:<br>1.We shall contact you for the updates you wish to have in your product.</p>
				<p>2.Customized products are not applicable for any returns, exchanges or refunds</li></p>
				<p>
			    Disclaimer:<br>Color of the actual product delivered might vary slightly from the image shown. As this product is handmade and each piece is unique.</p>
			     
				
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<br>
	<?php include 'footer.php';?>
	
	<script src="assets/js/jquery-2.1.4.min.js"></script>
	<script src="assets/js/jquery.magnific-popup.js"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<script>
	function incrementValue()
{
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    if(value<100){
        value++;
            document.getElementById('number').value = value;
    }
}
function decrementValue()
{
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    if(value>1){
        value--;
            document.getElementById('number').value = value;
    }

}
</script>

	<script src="assets/js/minicart.js"></script>
	<script>
		paypalm.minicartk.render(); 

		paypalm.minicartk.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});
	</script>
	<script src="assets/js/SmoothScroll.min.js"></script>
	<script src="assets/js/move-top.js"></script>
	<script src="assets/js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<script>
		$(document).ready(function () {
			
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<script src="assets/js/imagezoom.js"></script>
	<script src="assets/js/jquery.flexslider.js"></script>
	<script>
		// Can also be used with $(document).ready()
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				controlNav: "thumbnails"
			});
		});
	</script>
	<script src="assets/js/jquery.flexisel.js"></script>
	<script>
		$(window).load(function () {
			$("#flexiselDemo1").flexisel({
				visibleItems: 3,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1
					},
					landscape: {
						changePoint: 640,
						visibleItems: 2
					},
					tablet: {
						changePoint: 768,
						visibleItems: 2
					}
				}
			});

		});
	</script>
	<script src="assets/js/bootstrap.js"></script>
	</body>
	</html>