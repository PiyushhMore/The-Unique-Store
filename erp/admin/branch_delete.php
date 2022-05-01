<?php 
session_start();
$id=$_SESSION["mid"];
$name=$_SESSION["namez"];

if(empty($id)) {
	header("Location:index.php");
}
include 'db.php';

$mid=$_GET['mid'];
	
	$sql=mysqli_query($conn, "delete from branch where bid='$mid'");
	
	if($sql) {
		
		echo "<script type='text/javascript'>alert('Successfully deleted..!');</script>";
					  echo "<script>document.location='branch.php'</script>";
	} else {
		echo "<script type='text/javascript'>alert('Successfully not deleted..!');</script>";
					  echo "<script>document.location='branch.php'</script>";
	}
	


?>