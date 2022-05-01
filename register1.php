<?php 
error_reporting(null);
session_start();
$uid=$_SESSION['uid'];
include 'db.php';

$date=date['Y-m-d'];
$payment=$_POST['payment'];
$address=$_POST['address'];
$total_amt=$_POST['total_amt'];

$sql=mysqli_query($conn,"select * from temp as tp LEFT JOIN product as pt ON tp.pid=pt.pid where uid='$uid' and status='0'");
while($row=mysqli_fetch_array($sql)) {
	
	$pid=$row['pid'];
	$uid=$row['uid'];
	$price=$row['price'];
	$quantity=$row['quantity'];
	$gifting=$row['gifting'];
	
	$total=$price * $quantity;
	$grand +=$total;
}
	$sql=mysqli_query($conn,"select * from user where uid='$uid'");
	while($row=mysqli_fetch_array($sql)) {
		$address=$row['address'];
		$payment=$row['payment'];
		
		
	}

if(isset($_POST['update'])) {

	//$name=$_POST['name'];
	$uid=$_POST['uid'];
	$address=$_POST['address'];
	
	$sql1=mysqli_query($conn,"update user set address='$address' where uid='$uid'");
	
	$sql=mysqli_query($conn,"insert into orders (uid,date,payment,address,total_amt) values ('$uid','$date','$payment','$address','$total_amt')");
	
	
	if($sql1) {
		
		echo "<script type='text/javascript'>alert('new address added successfully..!');</script>";
					  echo "<script>document.location='checkout.php'</script>";
	} else {
		echo "<script type='text/javascript'>alert('error occured..!');</script>";
					  echo "<script>document.location='register1.php'</script>";
	}
	
}
?>

<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Anant Traders</title>
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
	   margin-top:-150px;
   }
   @media screen and (max-width: 600px) {
	   .w3l-contacts-12{
		   margin-top:-100px;
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
        <section class="w3l-breadcrumb">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Updation</li>
                </ul>
            </div>
        </section>
    </div>
    <br><br><br>
    <!-- //inner banner -->
    <!-- contact -->
    <section class="w3l-contacts-12">
        <div class="contact-top pt-5">
            <div class="container py-md-4 py-3">
                <div class="title-heading-w3 text-center mx-auto">
                    <h3 class="title-main">Update</h3>
                </div>
                <div class="d-grid cont-main-top mt-5">
                    <!-- contact form -->
                    <div class="contacts12-main mt-lg-2">
					<?php 
					$sql=mysqli_query($conn,"select * from user where uid='$uid'");
					$row=mysqli_fetch_array($sql);
					?>
                        <form action="" method="post" class="main-input" id="form_login"><br><br><br>
                            
						  <input type="hidden" name="uid" value="<?php echo $row['uid'];?>">
						  
                             <label><h3>&#8226;Add New Address:</h3></label>
				            <textarea  name="address" placeholder="Address"  required></textarea>
							
							<button type="submit" class="btn btn-warning btn-style mt-4" name="update">Update</button><br><br>
                            
                        </form>
                   </div>
				   
				   <div class="contact">
                        <div class="cont-subs">
                            <div class="cont-add">
                                <h4>Address:</h4>
                                <p class="contact-text-sub">10, Umiya Shakti Society, Kathe Lane,Above COSMOS Bank, Bankar Chowk, Dwarka ,Nashik- 422011. Maharashtra, India.</p>
                            </div>
                            <div class="cont-add">
                                <h4>Email:</h4>
                                <a href="info@anantthelimitlessart.com">
                                    <p class="contact-text-sub">– info@anantthelimitlessart.com</p>
                                </a>
                            </div>
                            <div class="cont-add">
                                <h4>Phone:</h4>
                                <a href="mobile:7573894488">
                                    <p class="contact-text-sub"> +91-7573894488</p>
                                </a>
                            </div>
                            <div class="social-icons-con">
                                <a href="https://www.facebook.com/Anant-The-Limitless-Art/" ><span class="fa fa-facebook" aria-hidden="true"></span></a>
                                <a href="https://www.instagram.com/anant_thelimitlessart/"><span class="fa fa-instagram" aria-hidden="true"></span></a>
                                <a href="https://www.linkedin.com/in/prajakta-joshi-02760b168/"><span class="fa fa-linkedin"
                                        aria-hidden="true"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section><br>
    <!-- //contact -->
    <!-- footer -->
    <?php include 'footer.php';?>
    <!-- //copyright -->

    <!-- Js scripts -->
    <!-- common jquery plugin -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->
    <!-- theme switch js (light and dark)-->
    <script src="assets/js/theme-change.js"></script>
    <script>
        function autoType(elementClass, typingSpeed) {
            var thhis = $(elementClass);
            thhis.css({
                "position": "relative",
                "display": "inline-block"
            });
            thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
            thhis = thhis.find(".text-js");
            var text = thhis.text().trim().split('');
            var amntOfChars = text.length;
            var newString = "";
            thhis.text("|");
            setTimeout(function () {
                thhis.css("opacity", 1);
                thhis.prev().removeAttr("style");
                thhis.text("");
                for (var i = 0; i < amntOfChars; i++) {
                    (function (i, char) {
                        setTimeout(function () {
                            newString += char;
                            thhis.text(newString);
                        }, i * typingSpeed);
                    })(i + 1, text[i]);
                }
            }, 1500);
        }

        $(document).ready(function () {
            // Now to start autoTyping just call the autoType function with the 
            // class of outer div
            // The second paramter is the speed between each letter is typed.   
            autoType(".type-js", 200);
        });
    </script>
    <!-- //theme switch js (light and dark)-->
    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->
    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->
    <!--bootstrap-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap-->
    <!-- //Js scripts -->

</body>
</html>