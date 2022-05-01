<?php 
error_reporting(null);
session_start();
$uid=$_SESSION['uid'];
$oid=$_GET['oid'];

include 'db.php'; 

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Anant-The Limitless Art</title>
  <!-- google-fonts -->
  <link
    href="//fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,400;1,600;1,700&display=swap"
    rel="stylesheet">
  <!-- //google-fonts -->
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  
<style>
 #number{
	text-align:center;
}
.button{
	width:8%;
	font-size:15px;
}
.button1{
	width:15%;
	color:black;
}
.form-group label {
  position: relative;
  cursor: pointer;
  font-size:18px;
}

.form-group label:before {
  content:'';
  -webkit-appearance: none;
  background-color: transparent;
  border: 2px solid black;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05), inset 0px -15px 10px -12px rgba(0, 0, 0, 0.05);
  padding: 10px;
  display: inline-block;
  position: relative;
  vertical-align: middle;
  cursor: pointer;
  margin-right: 8px;
  
}

.form-group input:checked + label:after {
  content: '';
  display: block;
  position: absolute;
  top: 2px;
  left: 9px;
  width: 6px;
  height: 14px;
  border: solid black;
  border-width: 0 2px 2px 0;
  transform: rotate(45deg);
}
@media screen and (max-width: 600px) {
	#checkout{
		margin-right:200%;
	}
	table{
		margin-right:90px;
	}
	.button1{
		width:90px;
	}
}
 </style>
</head>

<body>
  <!--header-->
 <?php include 'nav.php';?>
 
 <div class="inner-banner">
    <section class="w3l-breadcrumb1">
      <div class="container">
        <ul class="breadcrumbs1-custom-path">
          <li><a href="index.php">Home</a></li>
		  <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Order</li>
        </ul>
      </div>
    </section>
  </div>
  
  <section class="w3l-index py-5">
        <div class="container py-md-4 py-3">
		<div class="title-heading-w3 text-center mx-auto">
					<?php 
						$sql=mysqli_query($conn,"select * from temp as tp LEFT JOIN product as pt ON tp.pid=pt.pid where uid='$uid' and oid='$oid'");
						$row=mysqli_fetch_array($sql)
						?>
						
                <p style="font-size:35px;">Your order has been placed.</p><br>
				<p style="font-size:25px;">Your order no:<?php echo $row['oid'];?></p>
				
            </div>
            <br><br>
					<?php 
						$sql=mysqli_query($conn,"select * from temp as tp LEFT JOIN product as pt ON tp.pid=pt.pid where uid='$uid' and oid='$oid'");
						while($row=mysqli_fetch_array($sql))  { 
					?>
						
            <div class="col-lg-6 left-img pr-lg-4">
            <center><img src="assets/images/<?php echo $row['image1']; ?>" width="90" alt="<?php echo $row['image1']; ?>" height="90"></center>
          </div>
            <div class="col-lg-6 text-6-info mt-lg-0 mt-4">
            <p><h3><?php echo $row['pname'];?>(<?php echo $row['quantity'];?>)</h3>
			</p>
			<p>Description:<?php echo $row['description'];?></p>
			<p>Colour:<?php echo $row['colour'];?></p>
					<?php
					$total_price += ($row["price"]*$row["quantity"]);
					?>
		    </b></h4>
					<hr style="border:1px solid black; ">

			</div>
			<?php } ?>
			
	<div class="card-body cr">
      <table align="right" style="width:40%">
 
		<?php
		$sql=mysqli_query($conn,"select * from temp where gifting='yes' and uid='$uid' and oid='$oid'");
		$prod=mysqli_num_rows($sql);
		$total=$total_price +  $prod * 100;
		?>
		
		<tr>
		<th><h3>Total Amount:</h3></th>
		<td><h3>&#8377;<?php echo $total;?></h3></td>
		</tr>
 
	</table>
     </div>
	 <br><br>
			
			
        </div>
    </section>
	
	<?php include 'footer.php';?>
</body>
</html>