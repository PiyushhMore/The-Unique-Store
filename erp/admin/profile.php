<?php 
session_start();
$id=$_SESSION["uid"];
$name=$_SESSION["namez"];

if(empty($id)) {
	header("Location:index.php");
}
include 'db.php';

if( isset($_POST['update'])  ) {
	
	$name=$_POST['name'];
	$pass=$_POST['pass'];
	
	$sql=mysqli_query($conn, "update user set email='$name',password='$pass' ,cat='admin' where uid='$id'");
	
	if($sql) {
		
		echo "<script type='text/javascript'>alert('Successfully updated the details..!');</script>";
					  echo "<script>document.location='profile.php'</script>";
	} else {
		echo "<script type='text/javascript'>alert('Successfully not updated the details..!');</script>";
					  echo "<script>document.location='profile.php'</script>";
	}
	
}

?>
<html lang="en">
<head>
  <?php include 'head.php'; ?>
  <style>
  .hjk {
	width:70%;
    margin-left:16%;
    margin-top:4%;	
  }
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
            <h1 class="m-0 text-dark">UPDATE PROFILE</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Profile</li>
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
                <h3 class="card-title">UPDATE PROFILE</h3>
              </div>
			  
              <?php
			   $sql=mysqli_query($conn,"SELECT * FROM user WHERE uid='$id'");
               while($row=mysqli_fetch_array($sql)) {
				?>
				
              <form action="" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" value="<?php echo $row['email']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
			   <input type="text" class="form-control" name="pass" id="exampleInputPassword1" value="<?php echo $row['password']; } ?>">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div></div>
	  
        </div>
    </section>
  </div>
<?php include 'footer.php';?>
</body>
</html>
