<?php 
session_start();
include 'db.php';

if( isset($_POST['submit'])  ) {
	
	$institute_nm=$_POST['institute_nm'];
	$location=$_POST['location'];
	$gifting_products=$_POST['gifting_products'];
	$gifting_occasion=$_POST['gifting_occasion'];
	$approx_quantity=$_POST['approx_quantity'];
	$approx_budget_per_prod=$_POST['budget'];
	$website=$_POST['website'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$gst=$_POST['gst'];
	$estimated_delivery_period=$_POST['delivery_period'];
	
	$sql = mysqli_query($conn,"INSERT INTO corporate_gifting(institute_nm,location,gifting_products,gifting_occasion,approx_quantity,approx_budget_per_prod,website,email,mobile,gst,estimated_delivery_period)VALUES ('$institute_nm','$location','$gifting_products','$gifting_occasion','$approx_quantity','$approx_budget_per_prod','$website','$email','$mobile','$gst','$estimated_delivery_period')") or die(mysqli_error($conn));
	
	
require_once "Mail.php";
$from = "response@anantthelimitlessart.com";
$to = "info@anantthelimitlessart.com";

$subject = "Corporate Gifting";
$body = "Name of the Institution:".$_POST['institute_nm']."\r\n\r\n Location:".$_POST['location']."\r\n\r\n Gifting Products:".$_POST['gifting_products']."\r\n\r\n Gifting Occasion:".$_POST['gifting_occasion']."\r\n\r\n Approximate quantity:".$_POST['approx_quantity']."\r\n\r\n Approximate Budget per Product:".$_POST['budget']."\r\n\r\n Website:".$_POST['website']."\r\n\r\n Email:".$_POST['email']."\r\n\r\n Mobile-no:".$_POST['mobile']."\r\n\r\n Gst:".$_POST['gst']."\r\n\r\n Estimated Delivery Period:".$_POST['delivery_period'];

echo $body;

$host = "webmail.anantthelimitlessart.com";   // If SSL use, please use $host = "ssl://mail.example.com";
$port = "25";					// If SSL use, please use $port = "465";
$username = "response@anantthelimitlessart.com";
$password = "Lr^gw963";
$headers = array ('From' => $from,
 'To' => $to,
 'Subject' => $subject);
 
//foreach ($headers as $p){
// echo "$p<br />";
//}

//die("Finished");

 $smtp = Mail::factory('smtp',
 array ('host' => $host, 
 'auth' => true,
 'username' => $username,
 'password' => $password));
 

 
$mail = $smtp->send($to, $headers, $body);
if (PEAR::isError($mail)) {
 echo("<p>" . $mail->getMessage() . "</p>");
} else {
 echo "<script>alert('Message sent successfully!!')</script>";
 echo "<script>document.location='index.php'</script>";
}
	
	
	
	if($sql) {
		
		echo "<script type='text/javascript'>alert('Data inserted successfully...!');</script>";
					  echo "<script>document.location='corporate.php'</script>";
	} else {
		echo "<script type='text/javascript'>alert('error occured..!');</script>";
					  echo "<script>document.location='corporate.php'</script>";
	}
	
}
?>

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
.w3l-contacts-12
       {
	   margin-top:-100px;
       }
@media screen and (max-width: 600px) {
	.breadcrumbs6-custom-path a {
		margin-left:-45px;
		
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
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Corporate Gifting</li>
                </ul>
            </div>
        </section>
    </div>
    <!-- //inner banner -->
    <!-- contact -->
    <section class="w3l-contacts-12">
        <div class="contact-top pt-5">
            <div class="container py-md-4 py-3">
                <div class="title-heading-w3 text-center mx-auto">
                    <h3 class="title-main">Corporate Gifting</h3>
                    
                </div>
                <div class="d-grid cont-main-top mt-5">
                   
                    <div class="contacts12-main mt-lg-2">
                        <form action="" method="post" class="main-input">
                           
                            <input type="text" placeholder="Name of the institution" name="institute_nm"  required=""><br><br>
							
                            <input type="text" placeholder="Location" name="location"  required=""><br><br>
							
							 <input type="text" placeholder="Gifting Products(Mention products that you prefer or products from our catalogue)" name="gifting_products" required=""><br><br>
							 
							  <input type="text" placeholder="Gifting occasion " name="gifting_occasion" required=""><br><br>
							  
							  <input type="text" placeholder="Approximate quantity" name="approx_quantity" required=""><br><br>
							  
							  <input type="text" placeholder="Approximate budget per product" name="budget" required=""><br><br>
							  
							  <input type="text" placeholder="Website (If any)" name="website" required=""><br><br>
							  
							 <div class="top-inputs d-grid">
							 
                                <input type="email" placeholder="Email" name="email" required="">
								
                                <input type="mobile" name="mobile" placeholder="Mobile no"  required="">
                            </div>
							
							<input type="text" placeholder="Gst" name="gst"required=""><br><br>
							
							<input type="text" placeholder="Estimated delivery period " name="delivery_period" required="">
                            
                            <br><br>
							
							<input type="submit" class="btn btn-warning btn-style " name="submit" value="Submit Now" style=" height: 45px;  width: 130px; text-align:center; font-size:18px; padding-top: 10px; background-color:#E4B333">
                        </form>
                    </div>
                    
                    
                    <div class="contact">
                        <div class="cont-subs">
                            <div class="cont-add">
                                <h4>Address:</h4>
                                <p class="contact-text-sub">Shop no. 103, Meenatai Thakre Market , Savta Nagar ,Nashik- 422008. Maharashtra, India</p>
                            </div>
                            <div class="cont-add">
                                <h4>Email:</h4>
                                <a href="theuniquestore@gmail.com">
                                    <p class="contact-text-sub"> theuniquestore@gmail.com</p>
                                </a>
                            </div>
                            <div class="cont-add">
                                <h4>Phone:</h4>
                                <a href="mobile:7020839958">
                                    <p class="contact-text-sub"> +91-7020839958</p>
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
            <!-- map -->
           
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