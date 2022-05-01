<?php 
session_start();

include 'db.php';

if( isset($_POST['submit'])  ) {
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone_no=$_POST['phone'];
	$message=$_POST['message'];
	
	
	$sql = mysqli_query($conn,"INSERT INTO contact_us(name,email,phone_no,message)VALUES ('$name','$email','$phone_no','$message')") or die(mysqli_error($conn));
	
	//Mail Function 
// require_once "Mail.php";
// $from = "response@anantthelimitlessart.com";
// $to = "info@anantthelimitlessart.com";

// $subject = "Contact us";
// $body = "Name:".$_POST['name']."\r\n\r\n Email:".$_POST['email']."\r\n\r\n Phone Number:".$_POST['phone']."\r\n\r\n Message:".$_POST['message'];

// echo $body;

// $host = "webmail.anantthelimitlessart.com";   // If SSL use, please use $host = "ssl://mail.example.com";
// $port = "25";					// If SSL use, please use $port = "465";
// $username = "response@anantthelimitlessart.com";
// $password = "Lr^gw963";
// $headers = array ('From' => $from,
//  'To' => $to,
//  'Subject' => $subject);
 
// //foreach ($headers as $p){
// // echo "$p<br />";
// //}

// //die("Finished");

//  $smtp = Mail::factory('smtp',
//  array ('host' => $host, 
//  'auth' => true,
//  'username' => $username,
//  'password' => $password));
 

 
// $mail = $smtp->send($to, $headers, $body);
// if (PEAR::isError($mail)) {
//  echo("<p>" . $mail->getMessage() . "</p>");
// } else {
//  echo "<script>alert('Message successfully sent!')</script>";
//  echo "<script>document.location='index.php'</script>";
// }
	
	
	if($sql) {
		
		echo "<script type='text/javascript'>alert('Data inserted successfully...!');</script>";
					  echo "<script>document.location='contact.php'</script>";
	} else {
		echo "<script type='text/javascript'>alert('error occured..!');</script>";
					  echo "<script>document.location='contact.php'</script>";
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
.w3l-contacts-12 {
	margin-top:-100px;
}
.breadcrumbs2-custom-path li {
	margin-top:-90px;
}
</style>
</head>

<body>
    <!--header-->
    <?php include 'nav.php';?>
    <!--//header-->
    <!-- inner banner -->
    <div class="inner-banner">
        <section class="w3l-breadcrumb3">
            <div class="container">
                <ul class="breadcrumbs3-custom-path">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span> Contact Us</li>
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
                    <h3 class="title-main">Get In Touch</h3>
                    
                </div>
                <div class="d-grid cont-main-top mt-5">
                    <!-- contact form -->
                    <div class="contacts12-main mt-lg-2">
                        <form action="" method="post" class="main-input">
                            <div class="top-inputs d-grid">
                                <input type="text" placeholder="Name" name="name"  required="">
								
                                <input type="email" name="email" placeholder="Email"  required="">
								
                            </div>
                            <input type="mobile" placeholder="Phone Number" name="phone" required="">
							
                            <textarea placeholder="Message" name="message"  required=""></textarea>
							
                            <button type="submit" class="btn btn-warning btn-style mt-4" name="submit">Submit Now</button>
                        </form>
                    </div>
                    <!-- //contact form -->
                    <!-- contact address -->
                    <div class="contact">
                        <div class="cont-subs">
                            <div class="cont-add">
                                <h4>Address:</h4>
                                <!-- unique Store -->
                                <p class="contact-text-sub">Shop no. 103, Meenatai Thakre Market , Savta Nagar ,Nashik- 422008. Maharashtra, India</p>
                            </div>
                            <div class="cont-add">
                                <h4>Email:</h4>
                                <!-- unique store -->
                                <a href="theuniquestore@gmail.com">
                                    <p class="contact-text-sub"> theuniquestore@gmail.com</p>
                                </a>
                            </div>
                            <div class="cont-add">
                                <h4>Phone:</h4>
                                <a href="mobile:7573894488">
                                    <p class="contact-text-sub"> +91-7020839958</p>
                                </a>
                            </div>
                            <div class="social-icons-con">
                                <!-- unique store -->
                                <a href="https://www.facebook.com/Anant-The-Limitless-Art/" ><span class="fa fa-facebook" aria-hidden="true"></span></a>
                                <a href="https://www.instagram.com/anant_thelimitlessart/"><span class="fa fa-instagram" aria-hidden="true"></span></a>
                            
                            </div>
                        </div>
                    </div>
                    <!-- //contact address -->
                </div>
            </div>
            <!-- map -->
            <div class="mapouter"><div class="gmap_canvas"><iframe width="1250" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=10,%20Umiya%20Shakti%20Society,%20Kathe%20Lane,%20%20Above%20COSMOS%20Bank,%20Bankar%20Chowk,%20Dwarka%20Nashik-%20422011.%20Maharashtra,%20India&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://soap2day-to.com">soap2day</a><br><style>.mapouter{position:relative;text-align:right;height:400px;width:1250px;}</style><a href="https://www.embedgooglemap.net">map for website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:1250px;}</style></div></div>
            <!-- //map -->
        </div>
    </section>
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