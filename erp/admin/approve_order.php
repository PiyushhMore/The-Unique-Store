<?php
session_start();
error_reporting(null);
$order_no=$_GET['oid'];
$uid=$_SESSION['uid'];
$name=$_SESSION["namez"];

if(empty($uid))
{
	header("Location:index.php");
}
include 'db.php'; 

	
$sql=mysqli_query($conn,"update orders set ostatus='1' where order_no='$order_no' and ostatus='0'");

if($sql) {
		
		echo "<script type='text/javascript'>alert('Order approved...!');</script>";
		
					  echo "<script>document.location='orders.php'</script>";
	} else {
		echo "<script type='text/javascript'>alert('error occured..!');</script>";
					  echo "<script>document.location='orders.php'</script>";
	}

require_once "Mail.php";

$from = "response@anantthelimitlessart.com";
$to = "info@anantthelimitlessart.com";

$subject = "Order Confirmation";

$message ="Your order is confirmed";


$sql1=mysqli_query($conn,"select * from product as pt LEFT JOIN temp as tp ON pt.pid=tp.pid LEFT JOIN orders as od ON od.order_no=tp.oid where oid='$oid'");
while($row1=mysqli_fetch_array($sql1)) {
	
	$pname=$row1['pname'];
	$description=$row1['descripti
	on'];
	$price=$row1['price'];
	$quantity=$row1['quantity'];
	$gifting=$row1['gifting'];
	$total_amount=$row1['total_amount'];
}

$body = "Product Name:".$_POST['pname']."\r\n\r\n Description:".$_POST['description']."\r\n\r\n price:".$_POST['price']."\r\n\r\n Quantity:".$_POST['quantity']."\r\n\r\n gifting:".$_POST['gifting']."\r\n\r\n Total Amount:".$_POST['total_amount'];

echo $body;

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
 

 
$mail = $smtp->send($to, $headers, $body);
if (PEAR::isError($mail)) {
 echo("<p>" . $mail->getMessage() . "</p>");
} else {
	echo "send";
}

if($sql) {
		
		echo "<script type='text/javascript'>alert('order approved...!');</script>";
		
					  echo "<script>document.location='view_order.php'</script>";
	} else {
		echo "<script type='text/javascript'>alert('error occured..!');</script>";
					  echo "<script>document.location='view_order.php'</script>";
	}
	

?>