<?php
session_start();
include 'db.php';
$uid=$_SESSION['uid'];
$tid=$_GET['tid'];
$opn=$_GET['opn'];

if($opn=='plus') {
	$sql=mysqli_query($conn,"update temp set quantity=quantity+1 where temp_id='$tid' and uid='$uid'");
	header('location:cartproducts.php');
	
	//echo "<script> window.location:'cartproducts.php'; </script>";
}

if($opn=='minus') {
	$sql=mysqli_query($conn,"update temp set quantity=quantity-1 where temp_id='$tid' and uid='$uid'");
	header('location:cartproducts.php');
	
	//echo "<script> window.location:'cartproducts.php'; </script>";
}

if($opn='check') {
	$sql=mysqli_query($conn,"update temp set gifting='no' where temp_id='$tid' and uid='$uid'");
	header('location:cartproducts.php');
	
}