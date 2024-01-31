<?php 
include 'db.php';

if( isset($_POST['subscribe'])  ) {
	
	
	$email=$_POST['email'];
	
	$sql = mysqli_query($conn,"INSERT INTO subscribe (email)VALUES ('$email')") or die(mysqli_error($conn));
	
	if($sql) {
		
		echo "<script type='text/javascript'>alert('subscrition successfully ..!');</script>";
					  echo "<script>document.location='index.php'</script>";
	} else {
		echo "<script type='text/javascript'>alert('error occured..!');</script>";
					  echo "<script>document.location='index.php'</script>";
	}
	
}
?>