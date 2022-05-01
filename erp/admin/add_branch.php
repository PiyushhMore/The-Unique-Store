<?php 
session_start();
$id=$_SESSION["mid"];
$name=$_SESSION["namez"];

if(empty($id)) {
	header("Location:index.php");
}
include 'db.php';

if( isset($_POST['add'])  ) {
	
	$name=$_POST['name'];
	$qty=$_POST['addr'];
	
	$sql=mysqli_query($conn, "insert into branch (Name,Address,mid) values ('$name','$qty','$id')");
	
	if($sql) {
		
		echo "<script type='text/javascript'>alert('Successfully added the Branch..!');</script>";
					  echo "<script>document.location='branch.php'</script>";
	} else {
		echo "<script type='text/javascript'>alert('Successfully not added the Branch..!');</script>";
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
            <h1 class="m-0 text-dark">ADD BRANCH</h1>
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
                <h3 class="card-title">ADD BRANCH</h3>
              </div>
				
              <form action="" method="post">
                <div class="card-body">
				
				 <div class="form-group">
                    <label for="exampleInputPassword1">Branch Name</label>
			     <input type="text" class="form-control" name="name" id="exampleInputPassword1" placeholder="Name">
                  </div>
				
                  <div class="form-group">
				  <div class="row">
				  <div class="col-md-12">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control" name="addr" id="exampleInputEmail1" placeholder="Address">
                  </div>
				   </div></div>
				
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
