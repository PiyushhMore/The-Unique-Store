<?php 
session_start();
$uid=$_SESSION["uid"];
$name=$_SESSION["namez"];

if(empty($uid)) {
	header("Location:index.php");
}
include 'db.php';

if( isset($_POST['add'])  ) {
	
	$size=$_POST['size'];
	$szcode=$_POST['szcode'];

	$sql = mysqli_query($conn,"INSERT INTO size(size,szcode)VALUES ('$size','$szcode')") or die(mysqli_error($conn));
	
	if($sql) {
		
		echo "<script type='text/javascript'>alert('Successfully added the size..!');</script>";
					  echo "<script>document.location='size.php'</script>";
	} else {
		echo "<script type='text/javascript'>alert('Successfully not added the size ..!');</script>";
					  echo "<script>document.location='size.php'</script>";
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
            <h1 class="m-0 text-dark">ADD SIZE</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">SIZE</li>
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
                <h3 class="card-title">ADD SIZE</h3>
              </div>
				
              <form action="" method="post">
                <div class="card-body">
				
				 <div class="form-group">
                    <label for="exampleInputPassword1">Enter Size</label>
			     <input type="size" class="form-control" name="size" id="exampleInputPassword1" placeholder="size">
                  </div>
				 
				 <div class="form-group">
                    <label for="exampleInputPassword1">Enter Size Code</label>
			     <input type="size" class="form-control" name="szcode" id="exampleInputPassword1" placeholder="Size Code">
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="add" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div></div>
	  
        </div>
    </section>
  </div>
<?php include 'footer.php';?>

</body>
</html>
