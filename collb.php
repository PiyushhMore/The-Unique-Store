<?php 
session_start();
include 'db.php';

if( isset($_POST['submit'])  ) {
	
	$institute_nm=$_POST['institute_nm'];
	$location=$_POST['location'];
	$prod_library=$_POST['library'];
	$price_bracket=$_POST['price'];
	$website=$_POST['website'];
	$email=$_POST['email'];
	$mobile_no=$_POST['mobile'];
	$gst=$_POST['gst'];
	$collaboration=$_POST['collaboration'];

	/*$sql = mysqli_query($conn,"INSERT INTO collaboration1(institute_nm,location,prod_library,price_bracket,website,email,mobile_no,gst,collaboration)VALUES ('$institute_nm','$location','$prod_library','$price_bracket','$website','$email','$mobile_no','$gst','$collaboration')") or die(mysqli_error($conn));*/
	
	
require_once "Mail.php";
$from = "response@anantthelimitlessart.com";
$to = "mnkapadnis6050@gmail.com";

$subject = "Collboration with us";
$body = "Name:".$_POST['institute_nm']."\r\n\r\n Location:".$_POST['location']."\r\n\r\n Product Library:".$_POST['library']."\r\n\r\n Price Bracket:".$_POST['price']."\r\n\r\n Website:".$_POST['website']."\r\n\r\n Email:".$_POST['email']."\r\n\r\n Mobile-No:".$_POST['mobile']."\r\n\r\n Gst:".$_POST['gst']."\r\n\r\n Collaboration:".$_POST['collaboration'];

echo $body;
$host = "webmail.anantthelimitlessart.com";   // If SSL use, please use $host = "ssl://mail.example.com";
$port = "25";					// If SSL use, please use $port = "465";
$username = "response@anantthelimitlessart.com";
$password = "z&i741lS";
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
 echo "<script>alert('Message successfully sent!')</script>";
 echo "<script>document.location='index.php'</script>";
}
	
	
	/*if($sql) {
		
		echo "<script type='text/javascript'>alert('Data inserted successfully ...!');</script>";
		
					  echo "<script>document.location='collaboration.php'</script>";
	} else {
		echo "<script type='text/javascript'>alert('error occured..!');</script>";
					  echo "<script>document.location='collaboration.php'</script>";
	}*/

}
?>