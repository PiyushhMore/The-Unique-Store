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
	  .breadcrumbs6-custom-path li{
		  margin-left:-4px;
		  
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
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Collaboration</li>
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
                    <h3 class="title-main">Collaboration with us</h3>
                    <!--<p class="mt-4 sub-title"> Nulla mollis dapibus nunc, ut rhoncus
                        turpis sodales quis. Integer sit amet mattis quam.</p>-->
                </div>
                <div class="d-grid cont-main-top mt-5">
                    
                    <div class="contacts12-main mt-lg-2">
                        <form action="collab.php" method="post" class="main-input">
                           
                            <input type="text" placeholder="Name of the institution-" name="institute_nm" required=""><br><br>
							
                            <input type="text" placeholder="Location-" name="location"  required=""><br><br>
							
							  <input type="text" placeholder="Product library-" name="library" id="w3lName" required=""><br><br>
							  
							  <input type="text" placeholder="Price bracket-" name="price"required=""><br><br>
							  
							  <input type="text" placeholder="Website (If any)-" name="website" required=""><br><br>
							  
							  <div class="top-inputs d-grid">
							  <input type="email" placeholder="Email-" name="email" required="">
							  
							  <input type="mobile" placeholder="Mobile no-" name="mobile" required="">
							 </div>
							 
							<input type="text" placeholder="Gst-" name="gst"  required=""><br>
							
							<textarea placeholder="Why do you want to collaborate with us?" name="collaboration" required=""></textarea>
							
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
                                <a href="mailto:thstoretheunique@gmail.com">
                                    <p class="contact-text-sub">thstoretheunique@gmail.com</p>
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