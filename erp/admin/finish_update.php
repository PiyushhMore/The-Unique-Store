<?php 
session_start();
$uid=$_SESSION['uid'];
$name=$_SESSION["namez"];
$fid=$_GET['id'];

if(empty($uid)) {
	header("Location:index.php");
}
include 'db.php';

if( isset($_POST['add'])  ) {
	
	$fname=$_POST['fname'];
	$fcode=$_POST['fcode'];
	$fid=$_POST['fid'];
	
	
	$sql=mysqli_query($conn, "update finish set fname='$fname',fcode='$fcode' where fid='$fid'");
	
	if($sql) {
		
		echo "<script type='text/javascript'>alert('Successfully updated the finish product Details..!');</script>";
					  echo "<script>document.location='finish.php'</script>";
	} else {
		echo "<script type='text/javascript'>alert('Successfully not updated the finish product Details..!');</script>";
					  echo "<script>document.location='finish.php'</script>";
	}
	
}
?>
<html lang="en">
<head>
  <?php include 'head.php'; ?>
  <style>
  .hjk {
	width:80%;
    margin-left:10%;
    margin-top:2%;	
  }
  #ic, #passport { display: none; }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<?php
include 'header.php';
include 'sidebar.php';
?>
 <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Update Finish Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">FINISH</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
      
	  <section class="content">
	  <div class="container-fluid">
	  <div class="hjk">
	  <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update Finish Product</h3>
              </div>
			  
              <form action="" method="post">
                <div class="card-body">
				
				<?php
				$sql=mysqli_query($conn,"select * from finish where fid='$fid'");
				while($row=mysqli_fetch_array($sql)) 
				{
				?>
				
				 <div class="form-group">
                 <label for="exampleInputPassword1">Finish Product Name</label>
			     <input type="text" class="form-control" name="fname" value="<?php echo $row['fname']; ?>">
				 <input type="hidden" class="form-control" name="fid" value="<?php echo $fid; ?>">
				  <label for="exampleInputPassword1">Finish Product code</label>
			     <input type="text" class="form-control" name="fcode" value="<?php echo $row['fcode']; ?>">
                  </div>
				  
				<?php } ?>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="add" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div></div>
	  
        </div>
    </section>
  </div>
<?php include 'footer.php';?>

</body>
</html>
