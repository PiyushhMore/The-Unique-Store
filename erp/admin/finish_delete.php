<?php 
session_start();
$uid=$_SESSION["uid"];
$name=$_SESSION["namez"];

if(empty($uid)) {
	header("Location:index.php");
}
include 'db.php';

$fid=$_GET['id'];
	
	$sql=mysqli_query($conn, "delete from finish where fid='$fid'");
	
	if($sql) {
		
		echo "<script type='text/javascript'>alert('Successfully deleted..!');</script>";
					  echo "<script>document.location='finish.php'</script>";
	} else {
		echo "<script type='text/javascript'>alert('Successfully not deleted..!');</script>";
					  echo "<script>document.location='finish.php'</script>";
	}
	


?>