<?php 
session_start();
$uid=$_SESSION['uid'];
$name=$_SESSION["namez"];
$mid=$_GET['id'];

if(empty($uid)) {
	header("Location:index.php");
}
include 'db.php';

if( isset($_POST['add'])  ) {
	
	$mname=$_POST['mname'];
	$mcode=$_POST['mcode'];
	$mid=$_POST['mid'];
	
	
	$sql=mysqli_query($conn, "update material set mname='$mname', mcode='$mcode' where mid='$mid'");
	
	if($sql) {
		
		echo "<script type='text/javascript'>alert('Successfully updated the material Details..!');</script>";
					  echo "<script>document.location='material.php'</script>";
	} else {
		echo "<script type='text/javascript'>alert('Successfully not updated the material Details..!');</script>";
					  echo "<script>document.location='material.php'</script>";
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
            <h1 class="m-0 text-dark">Update material</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">MATERIAL</li>
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
                <h3 class="card-title">Update Material</h3>
              </div>
			  
             
				
              <form action="" method="post">
                <div class="card-body">
				
				<?php
				$sql=mysqli_query($conn,"select * from material where mid='$mid'");
				while($row=mysqli_fetch_array($sql)) 
				{
				?>
				
				 <div class="form-group">
                    <label for="exampleInputPassword1">Material Name</label>
			     <input type="text" class="form-control" name="mname" value="<?php echo $row['mname']; ?>">
				 <input type="hidden" class="form-control" name="mid" value="<?php echo $mid; ?>">
				  <label for="exampleInputPassword1">Material Code</label>
			     <input type="text" class="form-control" name="mcode" value="<?php echo $row['mcode']; ?>">
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
