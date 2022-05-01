<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<?php
include 'db.php';

session_start();

if( isset($_POST['login'])  ) {
       
 if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            }
        $name=$_POST['name'];
		$sql=mysqli_query($conn,"select mid from manager where mname='$name'");
		$r=mysqli_fetch_array($sql);


		$mid=$r['mid'];
		
        $password=$_POST['password'];
		$dept=$_POST['dept1'];
        
        $ret=mysqli_query( $conn, "SELECT * FROM manager WHERE mname='$name' and Password='$password' and departments='$dept'   ") or die("Could not execute query: " .mysqli_error($conn));

        $row = mysqli_fetch_assoc($ret);

        

        
        if(!$row) {
           
           echo '<script type="text/javascript">';
           echo 'alert("Access Denied")';
           echo '</script>'; 
        }
        else {
        	if ($row['ManagerCatagory']=="Admin") {
        		session_start();
        		$_SESSION["mid"] = "$mid";
                $_SESSION["namez"] = "$name";
				$_SESSION["departments"] = "$dept";
				echo $_SESSION["departments"];
            echo '<script type="text/javascript">';
            echo ' alert("succesfully loged in")'; 
            header("Location:dashboard.php");
            echo '</script>';# code...
        	}
        	elseif ($row['ManagerCatagory']=="Service Manager")
        	 {
        		 session_start();
           $_SESSION["mid"] = "$mid";
            $_SESSION["namez"] = "$name";
			$_SESSION["dept"] = "$dept";
            
            echo '<script type="text/javascript">';
            echo ' alert("succesfully loged in")'; 
            header("Location:dashboard.php");
            echo '</script>';
        		# code...
        	}
        
           
           
        }
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Welcome To Prathmesh Enterprises</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords"
		content="Trendz Login Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->
	<!--/Style-CSS -->
	<link rel="stylesheet" href="css/style1.css" type="text/css" media="all" />
	<!--//Style-CSS -->
</head>

<body>
	<!-- /login-section -->

	<section class="w3l-forms-23">
		<div class="forms23-block-hny">
			<div class="wrapper">
				
				<!-- if logo is image enable this   
					<a class="logo" href="index.html">
					  <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
					</a> 
				-->
				<div class="d-grid forms23-grids">
					<div class="form23">
						<div class="main-bg">
							<h6 class="sec-one"></h6>
							<div class="speci-login first-look">
								<img src="images/user.png" alt="" class="img-responsive">
							</div>
						</div>
	<div class="bottom-content">

		<form action="index.php" method="post">
			<input type="name" name="name" class="input-form" placeholder="Your Name" required="required" />
			
			<input type="password" name="password" class="input-form" placeholder="Your Password" required="required" />
			<input type="text" name="dept1" class="input-form"  placeholder="Departments" list="dept1">
					<datalist id="dept1" name="dept">
						<?php 
							
								$sql=mysqli_query($conn,"select * from department where branch='nashik'");
								while($row=mysqli_fetch_array($sql))
								{

						?>
					<option value = "<?php echo $row['Name']; ?>"><?php echo $row['Name']; ?></option><?php } ?>
             		</datalist>
			<style>
				.input-field{
					width:360px;
					height:30px;
				}
			</style>
			
			<button type="submit" class="loginhny-btn btn" name="login">Login</button>
		</form>
							
	</div>
	</div>
	</div>
	<div class="w3l-copy-right text-center">
	<p>© Prathamesh Enterprises. All Rights Reserved By| <b>Samtek Systems</b>   <a href="#" target="_blank"></a></p>
				</div>
			</div>
		</div>
	</section>
	<!-- //login-section -->
</body>

</html>