<?php
ini_set('display_errors','on');
error_reporting(E_ALL);
require "Mail.php";
$from = "info@anantthelimitlessart.com";
$to = "mnkapadnis6050@gmail.com";
$subject = "Hello Mohit\r\n\r\n";
$body = "Reply-To:\r\n\r\n Testing Mail";
$host = "webmail.anantthelimitlessart.com";   // If SSL use, please use $host = "ssl://mail.example.com";
$port = "25";					// If SSL use, please use $port = "465";
$username = "info@anantthelimitlessart.com";
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
 

 
//$mail = $smtp->send($to, $headers, $body);
if (PEAR::isError($mail)) {
 echo("<p>" . $mail->getMessage() . "</p>");
} else {
 echo "<script>alert('Message successfully sent!')</script>";
 echo "<script>document.location='index.php'</script>";
}
?>