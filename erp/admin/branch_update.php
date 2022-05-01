<?php 
session_start();
$id=$_SESSION["mid"];
$name=$_SESSION["namez"];
$mid=$_GET['mid'];

if(empty($id)) {
	header("Location:index.php");
}
include 'db.php';

if( isset($_POST['add'])  ) {
	
	$name=$_POST['name'];
	$qty=$_POST['addr'];
	$mid=$_POST['mid'];
	
	
	$sql=mysqli_query($conn, "update branch set Name='$name',Address='$qty' where bid='$mid'");
	
	if($sql) {
		
		echo "<script type='text/javascript'>alert('Successfully updated the Branch Details..!');</script>";
					  echo "<script>document.location='branch.php'</script>";
	} else {
		echo "<script type='text/javascript'>alert('Successfully not updated the Branch Details..!');</script>";
					  echo "<script>document.location='branch.php'</script>";
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
            <h1 class="m-0 text-dark">UPDATE BRANCH</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">BRANCH</li>
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
                <h3 class="card-title">UPDATE BRANCH</h3>
              </div>
			  
             
				
              <form action="" method="post">
                <div class="card-body">
				
				<?php
				$sql=mysqli_query($conn,"select * from branch where bid='$mid'");
				while($row=mysqli_fetch_array($sql)) 
				{
				?>
				
				 <div class="form-group">
                    <label for="exampleInputPassword1">Name</label>
			     <input type="text" class="form-control" name="name" value="<?php echo $row['Name']; ?>">
				 <input type="hidden" class="form-control" name="mid" value="<?php echo $mid; ?>">
                  </div>
				  
				 
				
                  <div class="form-group">
				  <div class="row">
				  <div class="col-md-12">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control" name="addr" value="<?php echo $row['Address']; ?>">
                  </div>
				  </div></div>
				  
                 
				
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
