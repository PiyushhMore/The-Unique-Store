<?php 
error_reporting(null);
session_start();
$uid=$_SESSION['uid'];

include 'db.php'; 

if(isset($_POST['Proceed'])) {

	$payment=$_POST['payment'];
	
	$sql=mysqli_query($conn,"update user set payment='$payment' where uid='$uid'");
	
$sql=mysqli_query($conn,"select * from temp as tp LEFT JOIN product as pt ON tp.pid=pt.pid where uid='$uid' and status='0' ");
while($row=mysqli_fetch_array($sql)) {
	
	$pid=$row['pid'];
	$uid=$row['uid'];
	$price=$row['price'];
	$quantity=$row['quantity'];
	$gifting=$row['gifting'];
	
	$total_amount=$price * $quantity;
	$grand +=$total_amount ;
	
	$sql2=mysqli_query($conn,"select * from temp where uid='$uid' and gifting='yes' and status='0'");
		$prod=mysqli_num_rows($sql2);
		$total_amount=$grand +  $prod * 100;
}
	$sql=mysqli_query($conn,"select * from user where uid='$uid'");
	while($row=mysqli_fetch_array($sql)) {
		$address=$row['address'];
		$tom=$row['email'];
		
	}
	
	$date=date('Y-m-d');
	
	$sql4=mysqli_query($conn,"insert into orders (uid,date,payment,address,total_amount) values ('$uid','$date','$payment','$address','$total_amount')") or die(mysqli_error($conn));
	$oid=mysqli_insert_id($conn);
	
	$sql3=mysqli_query($conn,"update temp set status='1',oid='$oid' where uid='$uid' and status='0'");
	
	
	//mail function
	$sqlmail=mysqli_query($conn,"select * from order as od LEFT JOIN temp as tp ON od.uid=tp.uid  LEFT JOIN product as pt ON pt.pid=tp.pid where uid='$uid'");
	
	
	while($rowmail=mysqli_fetch_array($sqlmail)) {
		
		$payment=$rowmail['payment'];
		$total_amount=$rowmail['$total_amount'];
		$address=$address['address'];
		
		$pname=$rowmail['pname'];
		$description=$rowmail['description'];
		$tom = $rowmail['email'];
	}
	
	require_once "Mail.php";
	$from = "response@anantthelimitlessart.com";
	$to= $tom;
	$subject="Order confirmation";
	$message="Your order is confirmed";
	
	$body = "Your order is confirmed\r\n\r\n Order no:".$oid."\r\n\r\n Product name:".$pname."\r\n\r\n Description:".$description."\r\n\r\n payment:".$_POST['payment']."\r\n\r\n Address:".$address."\r\n\r\n Total Amount:".$total_amount;
	
	
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
 
$mail = $smtp->send($to, $headers,$body);
if (PEAR::isError($mail)) {
 echo("<p>" . $mail->getMessage() . "</p>");
} else {
	echo "<script>alert('order confirmed!')</script>";
 echo "<script>document.location='order.php?oid=$oid'</script>";
}
	//end mail function 
	
	if($sql4) {
		
		echo "<script type='text/javascript'>alert('payment process completed..!');</script>";
					  echo "<script>document.location='order.php?oid=$oid'</script>";
	} else {
		echo "<script type='text/javascript'>alert('error occured..!');</script>";
					  echo "<script>document.location='payment.php'</script>";
	} 
	
	
	
}
?>

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
	   #test {
		   margin-left:-10%;
	   }
   }
   
 [type="radio"]:checked,
[type="radio"]:not(:checked) {
    position: absolute;
    left: -9999px;
}
[type="radio"]:checked + label,
[type="radio"]:not(:checked) + label
{
    position: absolute;
    padding-left: 28px;
    cursor: pointer;
    line-height: 20px;
    display: inline-block;
    color:black;
	font-size:20px;
}
[type="radio"]:checked + label:before,
[type="radio"]:not(:checked) + label:before {
    content: '';
    position: absolute;
    left: 0;
    top:0;
    width: 18px;
    height: 18px;
    border: 1px solid black;
    border-radius: 100%;
    background: #fff;
}
[type="radio"]:checked + label:after,
[type="radio"]:not(:checked) + label:after {
    content: '';
    width: 12px;
    height: 12px;
    background: blue;
    position: absolute;
    top: 3px;
    left: 3px;
    border-radius: 100%;
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
}
[type="radio"]:not(:checked) + label:after {
    opacity: 0;
    -webkit-transform: scale(0);
    transform: scale(0);
}
[type="radio"]:checked + label:after {
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1);
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
    <?php include 'nav.php';?>
    <!--//header-->
    <!-- inner banner -->
    <div class="inner-banner">
        <section class="w3l-breadcrumb6">
            <div class="container">
                <ul class="breadcrumbs6-custom-path">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Payment Options</li>
                </ul>
            </div>
        </section>
    </div>
	<br>
	
	<section class="w3l-contacts-12">
	<div class="contact-top pt-5">
            <div class="container py-md-4 py-3">
                
                <div class="d-grid cont-main-top mt-5">
                    <!-- contact form -->
                    <div class="contacts12-main mt-lg-2">
					
				<form action="" method="post" class="main-input" style="margin-left:60px;">
  
			<label><h3>Payment Now by NetBanking:</h3></label><br><br>
			
	<br><br>
 
	<button type="submit" class="btn btn-warning btn-style mt-4" id="paynow" name="paynow" onclick="myFunction()">Pay Now</button><br><br>
  
	</form>
	
</div>

                   <div class="contact">
                        <div class="cont-subs">
                            <div class="cont-add">
                                <h4>Address:</h4>
                                <p class="contact-text-sub">10, Umiya Shakti Society, Kathe Lane,Above COSMOS Bank, Bankar Chowk, Dwarka ,Nashik- 422011. Maharashtra, India</p>
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
	<script>
$('input:radio[name="payment"]').change(
function() {
	if($(this).is(':checked') &&(this).val()=='netbanking') {
		window.location="paynow.php";
	}
	else{
		window.location="payment.php";
	}
});
 
function myFunction() {
               var retVal = confirm("Do you really want to proceed ?");
               if( retVal == true ) {
                
				 window.location.href = "order.php?oid='$oid'";
                  return true;
               } else {
                  document.write ("User does not want to proceed!");
				  document.location='payment.php';
                  return false;
               }
			   
function activateButton(element){
	if(element.checked){
		document.getElementById("proceed").disabled=false;
	}
	else {
		document.getElementById("proceed").disabled=true;
}
}
</script>
	<?php include 'footer.php';?>

</body>
</html>