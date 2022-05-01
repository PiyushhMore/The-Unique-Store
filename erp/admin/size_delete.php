<?php
session_start();
$uid=$_SESSION["uid"];
$name=$_SESSION["namez"];
if(empty($uid)) {
	 header("Location:index.php");
 }
include 'db.php';

$sid=$_GET['id'];

	$sql=mysqli_query($conn,"delete from size where sid='$sid'");
	
	if($sql) {
		
		echo "<script type='text/javascript'>alert('Successfully deleted..!');</script>";
					  echo "<script>document.location='size.php'</script>";
	} else {
		echo "<script type='text/javascript'>alert('Successfully not deleted..!');</script>";
					  echo "<script>document.location='size.php'</script>";
	}
	

?> 