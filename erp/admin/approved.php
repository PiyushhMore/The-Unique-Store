<?php
session_start();
error_reporting(null);

$uid=$_SESSION['uid'];
$name=$_SESSION["namez"];

if(empty($uid))
{
	header("Location:index.php");
}


include 'db.php';
?>

<html lang="en">
<head>
 <?php include 'head.php'; ?>
 <style>
 .b{
	 margin-left:100px;
	 width:150px;
 }
  .cr {
   overflow:scroll;
    width:100%;
	height:600px;
   }
   .bn{
	   width:350px;
	   margin-left:10px;
   }
   .bk{
	   width:250px;
	   margin-left:60px;
   }
   .hidden {
	   display : none;
   }
  
</style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
<?php
 include 'header.php';
 include 'sidebar.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><b>Approved Orders</b></h1> 
			
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Approved Orders</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header bg-primary">
                <h3 class="card-title">Approved Orders</h3> 
              </div>
			  
			  <div class="card-body ">
			  <?php 
			   $i=1;
			  $sql=mysqli_query($conn,"select * from product as pt LEFT JOIN temp as tp ON pt.pid=tp.pid LEFT JOIN orders as od ON od.order_no=tp.oid where ostatus='1'");
			   
			while($row=mysqli_fetch_array($sql)) {
			  ?>
			  <td><?php echo $i;echo "." ?></td>
			  <h4 style="margin-left:300px;">Order no:<?php echo $row['order_no'];?></h4>
			<h3 style="margin-left:300px;"> Product Name : <?php echo $row['pname'];?><br></h3>
			 <h5 style="margin-left:300px;">Description : <?php echo $row['description'];?><br></h5>
			 <h5 style="margin-left:300px;">Price : <?php echo $row['price'];?><br></h5>
			<h5 style="margin-left:300px;"> Quantity : <?php echo $row['quantity'];?><br></h5>
			 <h5 style="margin-left:300px;">Customization : <?php echo $row['customization'];?><br></h5>
			<h5 style="margin-left:300px;"> Gifting : <?php echo $row['gifting'];?><br></h5>
			
		<h5 style="margin-left:300px;">Address : <?php echo $row['address'];?><br></h5>
		<h5 style="margin-left:300px;">Payment mode : <?php echo $row['payment'];?><br></h5>
		
		<h3 style="margin-left:300px;">Total Amount : &#8377;<?php echo $row['total_amount'];?><br></h3>
			<hr style="border:1px solid black;">
			<?php $i++; } ?>
			     </div>
			  </div>
			  
			 </div>
			 </div>
			</div>
		</div>
	</section>
	
	
	 <script src= 
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> 
    </script> 
  <script> 
            $(document).ready(function() { 
                $("#gfg").on("keyup", function() { 
                    var value = $(this).val().toLowerCase(); 
                    $("#geeks tr").filter(function() { 
                        $(this).toggle($(this).text() 
                        .toLowerCase().indexOf(value) > -1) 
                    }); 
                }); 
            }); 
  </script>
  
  <?php include 'footer.php';?>
  
</div>

<?php include 'script.js'; ?>
</body>
</html>