<?php
error_reporting(E_ERROR);
session_start();

include 'db.php';

if(isset($_POST['submit']))
{ 
	$email = $_POST['email'];
		$result = mysqli_query($conn,"SELECT * FROM user where email='$email'") or die("Could not execute query: " .mysqli_error($conn));
		$row = mysqli_fetch_assoc($result);
		
		if (empty($email)) {
			
			echo "<script type='text/javascript'>alert('Your email is required..!');</script>";
					  echo "<script>document.location='password.php'</script>";
		}
		
		else if(mysqli_num_rows($result) <= 0) {
	  
		echo "<script type='text/javascript'>alert('Sorry, no user exists on our system with that email..!');</script>";
		}
		
		else {
		$fetch_uid=$row['uid'];
		$tom=$row['email'];
		$password=$row['password'];
		if($email==$email) {
			
					require_once "Mail.php";
	$from = "response@theuniquestore@gmail.com";
	$to= $tom;
	$subject="Password";
	
	
	$body = "Your password is:".$password;
	
	echo $body."<br>";
	echo $to;
	
	
$host = "webmail.anantthelimitlessart.com";   
$port = "25";					
$username = "response@anantthelimitlessart.com";
$password = "Lr^gw963";
$headers = array ('From' => $from,
 'To' => $to,
 'Subject' => $subject);
	
 $smtp = Mail::factory('smtp',
 array ('host' => $host, 
 'auth' => true,
 'username' => $username,
 'password' => $password));
 
$mail = $smtp->send($to, $headers,$message,$body);
if (PEAR::isError($mail)) {
 echo("<p>" . $mail->getMessage() . "</p>");
} else {
	echo "<script>alert('your password is sent on your email..please check your email..!')</script>";
 
}
		}
	}
}
?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Anant-The Limitless Art</title>
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
        <section class="w3l-breadcrumb">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span> Forget Password</li>
                </ul>
            </div>
        </section>
    </div>
	
	
	<section class="w3l-contacts-12">
        <div class="contact-top pt-5">
            <div class="container py-md-4 py-3">
                
                <div class="d-grid cont-main-top mt-5">
                    <!-- contact form -->
                    <div class="contacts12-main mt-lg-2">
                        <form action="" method="post" class="main-input">
                            
							<h4>Forget Password?</h4><br>
                            <input type="text" placeholder="Enter Email id" name="email"  >
                          <br><br>
                           
                            <button type="submit" class="btn btn-warning btn-style mt-4" name="submit">Send</button><br><br>
								
                        </form>
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
           
    </section>
	
	<?php include 'footer.php';?>

</body>
</html>