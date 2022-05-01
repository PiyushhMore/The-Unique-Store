<?php
error_reporting(null);
session_start();
include 'db.php';

$temp_id=$_GET['temp_id'];
		
$sql =mysqli_query($conn,"DELETE FROM temp WHERE temp_id='$temp_id'");

		
		if($sql) {
			echo "<script>alert('product removed successfully');</script>";
                        echo "<script>window.location='cartproducts.php';</script>";
		} else { 
		echo "<script>alert('failed');</script>";
                        echo "<script>window.location='cartproducts.php';</script>";
		}
	
 
?>
