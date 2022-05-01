<?php 
session_start();
$uid=$_SESSION['uid'];
$name=$_SESSION["namez"];
$sid=$_GET['id'];

if(empty($uid)) {
	header("Location:index.php");
}
include 'db.php';

if( isset($_POST['add'])  ) {
	
	$ccname=$_POST['ccname'];
	$scname=$_POST['scname'];
	$scode=$_POST['scode'];
	$sid=$_POST['sid'];
	
	$sql=mysqli_query($conn, "update subcategory set ccname='$ccname',scname='$scname',scode='$scode' where sid='$sid'") or die(mysqli_error($conn));
	
	if($sql) {
		
		echo "<script type='text/javascript'>alert('Successfully updated the subcategory Details..!');</script>";
					  echo "<script>document.location='subcategory.php'</script>";
	} else {
		echo "<script type='text/javascript'>alert('Successfully not updated the subcategory Details..!');</script>";
					  echo "<script>document.location='subcategory.php'</script>";
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
            <h1 class="m-0 text-dark">UPDATE subcategory</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">SUBCATEGORY</li>
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
                <h3 class="card-title">UPDATE SUBCATEGORY</h3>
              </div>
			  
              <form action="" method="post">
                <div class="card-body">
				
				<?php
				$sql=mysqli_query($conn,"select * from subcategory where sid='$sid'");
				while($row=mysqli_fetch_array($sql)) 
				{
				?>
				
				 <div class="form-group">
                  <label for="exampleInputPassword1">Category Name</label>
			      <select class="form-control" name="ccname">
					<option value="<?php echo $row['ccname']; ?>"><?php echo $row['ccname']; ?></option>
					<?php 
					$sql=mysqli_query($conn,"select * from category");
					while($row1=mysqli_fetch_array($sql)) {
					?>
               		<option value="<?php echo $row1['cid']; ?>"><?php echo $row1['cname']; ?></option><?php } ?>
			   </select>
			   </div>
				 <input type="hidden" class="form-control" name="sid" value="<?php echo $sid; ?>">
				 
				 <div class="form-group">
				 <label for="exampleInputPassword1">SubCategory Name</label>
			     <input type="text" class="form-control" name="scname" value="<?php echo $row['scname']; ?>">
				 </div>
				  
				  <div class="form-group">
				 <label for="exampleInputPassword1">SubCategory Code</label>
			     <input type="text" class="form-control" name="scode" value="<?php echo $row['scode']; ?>">
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




