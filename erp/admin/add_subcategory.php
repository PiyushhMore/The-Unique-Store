<?php 
session_start();
$uid=$_SESSION["uid"];
$name=$_SESSION["namez"];

if(empty($uid)) {
	header("Location:index.php");
}
include 'db.php';

if( isset($_POST['add'])  ) {
	
	$ccname=$_POST['ccname'];
	$scname=$_POST['scname'];
	$scode=$_POST['scode'];

	$sql = mysqli_query($conn,"INSERT INTO subcategory(ccname,scname,scode)VALUES ('$ccname','$scname','$scode')") or die(mysqli_error($conn));
	
	if($sql) {
		
		echo "<script type='text/javascript'>alert('Successfully added the subcategory..!');</script>";
					  echo "<script>document.location='subcategory.php'</script>";
	} else {
		echo "<script type='text/javascript'>alert('Successfully not added the subcategory..!');</script>";
					  echo "<script>document.location='subcategory.php'</script>";
	}
	
}
//$sql1=mysqli_query($conn,"select * from category");

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
            <h1 class="m-0 text-dark">ADD SUBCATEGORY</h1>
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
                <h3 class="card-title">ADD SUBCATEGORY</h3>
              </div>
				
              <form action="" method="post">
                <div class="card-body">
				
				 <div class="form-group">
                  <label for="exampleInputPassword1">Category Name</label>
			    <select class="form-control" style="width: 100%;" name="ccname">
				<option value="">--- Please Select ---</option>
					<?php 
					$sql=mysqli_query($conn,"select * from category");
					while($row=mysqli_fetch_array($sql)) {
					?>
               		<option value="<?php echo $row['cid']; ?>"><?php echo $row['cname']; ?></option><?php } ?>
			   </select>
                  </div>
				
                  <div class="form-group">
				  <div class="row">
				  <div class="col-md-12">
                    <label for="exampleInputEmail1">Subcategory Name</label>
                    <input type="text" class="form-control" name="scname" id="exampleInputEmail1" placeholder="SubCategory Name">
                  </div>
				   </div></div>
				   
				   <div class="form-group">
				  <div class="row">
				  <div class="col-md-12">
                    <label for="exampleInputEmail1">Subcategory Code</label>
                    <input type="text" class="form-control" name="scode" id="exampleInputEmail1" placeholder="SubCategory Code">
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
