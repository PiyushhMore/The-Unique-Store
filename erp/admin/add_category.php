<?php 
session_start();
$uid=$_SESSION['uid'];
$name=$_SESSION["namez"];

if(empty($uid)) {
	header("Location:index.php");
}
include 'db.php';

if( isset($_POST['add'])  ) {
	
	
	$cname=$_POST['cname'];
	$ccode=$_POST['code'];
	$sql=mysqli_query($conn, "insert into category (cname,ccode) values ('$cname','$ccode')") or die(mysqli_error($conn));
	
	if($sql) {
		
		echo "<script type='text/javascript'>alert('Successfully added the category..!');</script>";
					  echo "<script>document.location='category.php'</script>";
	} else {
		echo "<script type='text/javascript'>alert('Successfully not added the category..!');</script>";
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
            <h1 class="m-0 text-dark">ADD CATEGORY</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Category</li>
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
                <h3 class="card-title">ADD CATEGORY</h3>
              </div>
				
              <form action="" method="post">
                <div class="card-body">
				
				 <div class="form-group">
                    <label for="exampleInputPassword1">Category Name</label>
			     <input type="text" class="form-control" name="cname" id="exampleInputPassword1" placeholder="Name">
                  </div>
				 <div class="form-group">
				   <label for="exampleInputPassword1">Category Code</label>
				 <input type="text" class="form-control" name="code" id="exampleInputPassword1" placeholder="category code">
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
