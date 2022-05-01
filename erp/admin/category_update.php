
<?php 
session_start();
$uid=$_SESSION['uid'];
$name=$_SESSION["namez"];
$cid=$_GET['id'];

if(empty($uid)) {
	header("Location:index.php");
}
include 'db.php';

if( isset($_POST['add'])  ) {
	
	$cname=$_POST['cname'];
	$ccode=$_POST['ccode'];
	$cid=$_POST['cid'];
	
	
	$sql=mysqli_query($conn, "update category set cname='$cname',ccode='$ccode' where cid='$cid'") or die(mysqli_error($conn));
	
	if($sql) {
		
		echo "<script type='text/javascript'>alert('Successfully updated the category Details..!');</script>";
					  echo "<script>document.location='category.php'</script>";
	} else {
		echo "<script type='text/javascript'>alert('Successfully not updated the category Details..!');</script>";
					  echo "<script>document.location='category.php'</script>";
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
            <h1 class="m-0 text-dark">UPDATE category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">CATEGORY</li>
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
                <h3 class="card-title">UPDATE CATEGORY</h3>
              </div>
			  
              <form action="" method="post">
                <div class="card-body">
				
				<?php
				$sql=mysqli_query($conn,"select * from category where cid='$cid'");
				while($row=mysqli_fetch_array($sql)) 
				{
				?>
				
				 <div class="form-group">
                 <label for="exampleInputPassword1">Category Name</label>
			     <input type="text" class="form-control" name="cname" value="<?php echo $row['cname']; ?>">
				 <input type="hidden" class="form-control" name="cid" value="<?php echo $cid; ?>">
				 <label for="exampleInputPassword1">Category Code</label>
			     <input type="text" class="form-control" name="ccode" value="<?php echo $row['ccode']; ?>">
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
