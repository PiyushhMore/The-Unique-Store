<?php 
session_start();

$uid=$_SESSION['uid'];
if(empty($uid)) {
	
	echo "<script type='text/javascript'>alert('please login..!');</script>";
					  echo "<script>document.location='login.php'</script>";
}
else {

$date=date("Y-m-d");
$customize_req=$_POST['requirements'];
$gifting=$_POST['gifting'];
$customization=implode(",",$_POST['customization']);
$quantity=$_POST['quantity'];
$pid=$_POST['pid'];

include 'db.php';


	
	$sql=mysqli_query($conn,"select * from temp where pid='$pid' and uid='$uid' and status='0'");
	$prod=mysqli_num_rows($sql);
	
	if($prod > 0) {
		$sql=mysqli_query($conn," update temp set quantity=quantity+'$quantity' where pid='$pid' and uid='$uid'");
		
		echo "<script type='text/javascript'>alert('product quantity is updated..!');</script>";
		
					  echo "<script>document.location='product.php?pid=$pid'</script>";
	}
	else {
		
	$sql = mysqli_query($conn,"INSERT INTO temp (pid,uid,date,customization,quantity,gifting)VALUES ('$pid','$uid','$date','$customization','$quantity','$gifting')") or die(mysqli_error($conn));
	
	if($sql) {
		
		echo "<script type='text/javascript'>alert('product added to your cart..!');</script>";
		
					  echo "<script>document.location='product.php?pid=$pid'</script>";
	} else {
		echo "<script type='text/javascript'>alert('error occured..!');</script>";
					  echo "<script>document.location='cart.php'</script>";
	}
}
}
?>