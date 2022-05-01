<?php 
error_reporting(E_ERROR);

if($_SESSION["uid"]) {
$id=$_SESSION["uid"];
$name=$_SESSION["namez"];
}
include 'db.php';

$sql=mysqli_query($conn,"select COUNT(temp_id) as tid from temp where uid='$id' and status='0'");
$row=mysqli_fetch_array($sql);
$count=$row['tid'];

?>


<!doctype html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Anant-The Limitless Art</title>
    <!-- google-fonts -->
    <link href="//fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style-starter.css">


<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<link href="https://fonts.googleapis.com/css?family=Quicksand|Russo+One&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="style.css">
<style>

@media screen and (max-width: 600px) {
	.image1{
	width:280px;
	height:500px:
	
}
.w3l-index-block2
{
	margin-top:-250px;
}
.a1{
	margin-top:50px;
	margin-left:20px;
}
.b1{
	display:none;
}
.c1{
	display:none;
}
.w3l-banner{
	margin-top:30px;
}
.navbar-toggler{
	margin-left:10px;
	margin-top:50px;
}
}
.mobile{
	display:none;
}
@media screen and (max-width: 600px) {
	.mobile{
		display:block;
		
	}
	.search-right{
		display:none;
	}
}
.badge {
  padding-left: 9px;
  padding-right: 9px;
  -webkit-border-radius: 9px;
  -moz-border-radius: 9px;
  border-radius: 9px;
}

.label-warning[href],
.badge-warning[href] {
  background-color: #c67605;
}
#lblCartCount {
    font-size: 18px;
    background: #E4B333;
    color: #000;
    padding: 0 5px;
    vertical-align: top;
    margin-left: -10px; 
}
.navbar-brand img {
	border:hidden;
}
#navbarTogglerDemo02{
	margin-left:200px;
}


</style>

</head>
<body>
    <!--header-->
	
	
				<?php 
				if(empty($id)) {
				?>
                    <center><a class="mobile" href="login.php" title="Login" style="font-size:20px;color:black;">Login</a></center>
				<?php } else { 
				
				?>
				     <center><a class="mobile" href="logout.php" title="Logout" style="font-size:20px;color:black;"><?php echo  strtok($name, " ");?> </a></center>
                <?php } ?>	
		
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg stroke px-0">
  <a class="navbar-brand" href="index.php">
        <img src="assets/images/logo.png"  title="Your logo" style="height:100px;width:270px;margin-top:-3px;border:none;">
    </a>
	
                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                  <ul class="navbar-nav mx-lg-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                        </li>
						     

							 
                       <li class="nav-item">
                            <a class="nav-link" href="about1.php" style="margin-right:5px;">About Us</a>
                        </li>
					
<div class="dropdown">
						<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" style="padding: 5px; width: 80px; margin-top:0.5px; font-size : 18px;border:none;">Decor</button>
    
    <ul class="dropdown-menu">
      <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#" style="font-size:17px">Tableware <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a  href="trays.php" style="font-size:17px">Trays</a></li><br>
          <li><a  href="coasters.php" style="font-size:17px">Coasters</a></li>
		  <!--<li><a tabindex="-1" href="table.php" style="font-size:17px">Table Mats</a></li>-->
        </ul>
      </li>
	  
	   <li class="dropdown-submenu">
        <a class="test"  href="boxes.php" style="font-size:17px">Boxes and Organizers <span class="caret"></span></a>
        <ul class="dropdown-menu">
         <!-- <li><a tabindex="-1" href="keepsake.php" style="font-size:17px">Keepsake Boxes</a></li>
          <li><a tabindex="-1" href="jewellary.php" style="font-size:17px">Jewellery Organizers</a></li>
          <li><a tabindex="-1" href="tea.php" style="font-size:17px">Tea Boxes</a></li>
          <li><a tabindex="-1" href="watch.php" style="font-size:17px">Watch Boxes</a></li>-->
        </ul>
      </li>
	  
	   <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#" style="font-size:17px">Wall Décor<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a  href="frames.php" tabindex="-1" style="font-size:17px">Frames</a></li><br>
         <!-- <li><a tabindex="-1" href="mirrors.php" style="font-size:17px">Mirrors</a></li><br>
		  <li><a tabindex="-1" href="hangings.php" style="font-size:17px">Hangings</a></li><br>
          <li><a tabindex="-1" href="plates.php" style="font-size:17px">Plates</a></li>
		  <li><a tabindex="-1" href="key.php" style="font-size:17px">Key Holders</a></li>-->
        </ul>
      </li>
	  
	 <!-- <li><a tabindex="-1" href="lampshades.php" style="font-size:17px">Lampshades</a></li>
      <li><a tabindex="-1" href="candle.php" style="font-size:17px">Candle Holders</a></li>
	  <li><a tabindex="-1" href="planters.php" style="font-size:17px">Planters</a></li>-->
	  
    </ul>
  </div>
 						
		<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Collection
							</a>
							<div class="dropdown-menu">
							  <a class="dropdown-item" href="goldenornament.php">The Golden Ornaments</a>
							  <a class="dropdown-item" href="nakshi.php">Nakshi</a>
							  <a class="dropdown-item" href="rangsaazi.php">Rang Saazi</a>
						
						    </div>
					    </li>
        <!--<li class="nav-item">
          <a class="nav-link" href="gifting.php">Gifting</a>
         </li>
		 <li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
				<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Materials
				</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="wood.php">Wood</a>
					<a class="dropdown-item" href="glass.php">Glass</a>
					<a class="dropdown-item" href="fabric.php">Fabric</a>
					<a class="dropdown-item" href="canvas.php">Canvas</a>
					<a class="dropdown-item" href="fiber.php">Fiber</a>
					<a class="dropdown-item" href="terracotta.php">Terracotta</a>
				</div>
		</li>
		<li class="nav-item">
          <a class="nav-link" href="blogs.php">Art & Culture</a>
        </li>-->
   </ul>
                </div>
				<div class="search-right">
                    <a href="#search" title="search"><span class="fa fa-search" aria-hidden="true" style="font-size:20px;color:black;"></span></a>
                    <!-- search popup -->
                    <div id="search" class="pop-overlay">
                        <div class="popup">
                            <form action="#search" method="GET" class="search-box">
                                <input type="search" placeholder="Enter Keyword" name="search" required="required"
                                    autofocus="">
                                <button type="submit" class="btn"><span class="fa fa-search"
                                        aria-hidden="true"></span></button>
                            </form>
                        </div>
                        <a class="close" href="#close">×</a>
                    </div>
                    <!-- //search popup -->
                </div>&nbsp;
				
				 <li class="a1">
                    <a href="cartproducts.php" title="cart"><i class="fa" style="font-size:30px;color:black;">&#xf07a;</i>
        <span class='badge badge-warning' id='lblCartCount'><?php echo $count;?>
		</span></a>
                       
                </li>&nbsp;&nbsp;&nbsp;&nbsp;
				
				<li class="b1">
                    <a href="#wishlist" title="wishlist"><span class="fa fa-heart" aria-hidden="true" style="font-size:20px;color:black;"></span></a>
                        
                </li>&nbsp;&nbsp;&nbsp;&nbsp;
				
				
				<li class="c1">
				<?php 
				if(empty($id)) {
				?>
                    <a href="login.php" title="Login" style="font-size:20px;color:black;">Login</a>
				<?php } else {
					
				?>
				     <a href="logout.php" title="Logout" style="font-size:20px;color:black;">
					 <?php 
					 echo  strtok($name, " ");  ?> </a>
                <?php } ?>				
				</li>
				
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});


</script>
	
	
    <!-- //newsletter section -->
   
    <!-- //copyright -->

    <!-- Js scripts -->
    <!-- common jquery plugin -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->
    <!-- owl carousel for team -->
    <script src="assets/js/owl.carousel.js"></script>
    <script>
        $(document).ready(function () {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 0,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    667: {
                        items: 2,
                        nav: true,
                        margin: 20
                    },
                    1000: {
                        items: 2,
                        nav: true,
                        loop: true,
                        margin: 20
                    }
                }
            })
        })
    </script>
    <!-- //owl carousel for team -->
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
    <!-- magnific popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
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

            $('.popup-with-move-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-slide-bottom'
            });
        });
    </script>
    <!-- //magnific popup -->
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
	
	<script>
	var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}
</script>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
   <script>
   var pos = 0;
var totalSlides = $('#slider-wrap ul li').length;
var sliderWidth = $('#slider-wrap').width();
$(document).ready(function(){
	$('#slider-wrap ul#slider').width(sliderWidth*totalSlides);
	$('#next').click(function(){
		slideRight();
	});
	$('#previous').click(function(){
		slideLeft();
	});
	var autoSlider = setInterval(slideRight, 3000);
	$.each($('#slider-wrap ul li'), function() { 
	   //set its color
	   var c = $(this).attr("data-color");
	   $(this).css("background",c);
	   var li = document.createElement('li');
	   $('#pagination-wrap ul').append(li);	   
	});
	countSlides();
	pagination();
	$('#slider-wrap').hover(
	  function(){ $(this).addClass('active'); clearInterval(autoSlider); }, 
	  function(){ $(this).removeClass('active'); autoSlider = setInterval(slideRight, 3000); }
	);
});
function slideLeft(){
	pos--;
	if(pos==-1){ pos = totalSlides-1; }
	$('#slider-wrap ul#slider').css('left', -(sliderWidth*pos)); 	
	
	//*> optional
	countSlides();
	pagination();
}
function slideRight(){
	pos++;
	if(pos==totalSlides){ pos = 0; }
	$('#slider-wrap ul#slider').css('left', -(sliderWidth*pos)); 
	
	//*> optional 
	countSlides();
	pagination();
}
function countSlides(){
	$('#counter').html(pos+1 + ' / ' + totalSlides);
}

function pagination(){
	$('#pagination-wrap ul li').removeClass('active');
	$('#pagination-wrap ul li:eq('+pos+')').addClass('active');
}
		
   </script>
	
	
</body>
</html>