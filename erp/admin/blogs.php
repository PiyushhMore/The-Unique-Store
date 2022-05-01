<?php 
session_start();
$uid=$_SESSION['uid'];
$name=$_SESSION["namez"];

if(empty($uid)) {
	header("Location:index.php");
}
include 'db.php';

if( isset($_POST['submit'])  ) {
	
	
	$title=$_POST['title'];
	$content=$_POST['editor1'];
	
	$imgFile1 = $_FILES["image1"]["name"]; 
	$imgFile2 = $_FILES["image2"]["name"]; 
	
    
    $folder1 = "images/".$imgFile1; 
	$folder2 = "images/".$imgFile2; 
	
          
    
        $target_dir = "images/";
 if(!is_dir($target_dir))
 {
mkdir($target_dir, 0777, true);
 }
$target_file1 = $target_dir . basename($_FILES["image1"]["name"]);
$target_file2 = $target_dir . basename($_FILES["image2"]["name"]);


move_uploaded_file($_FILES["image2"]["tmp_name"], $target_file2);

 
 if (move_uploaded_file($_FILES["image1"]["tmp_name"], $target_file1)) {
    echo "The file ". basename( $_FILES["image1"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
	
	$sql=mysqli_query($conn, "insert into blog_posts (title,image1,image2,content) values ('$title','$imgFile1','$imgFile2','$content')") or die(mysqli_error($conn));
	
	if($sql) {
		
		echo "<script type='text/javascript'>alert('Successfully added the blog..!');</script>";
					  echo "<script>document.location='dispblog.php'</script>";
	} else {
		echo "<script type='text/javascript'>alert('Successfully not added the blog..!');</script>";
					  echo "<script>document.location='dispblog.php'</script>";
	}
}
?>

<html lang="en">

<head>
  <?php include 'head.php'; ?>
  <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
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
            <h1 class="m-0 text-dark">Add Blog</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Blog</li>
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
                <h3 class="card-title">ADD BLOG</h3>
              </div>
				
              <form action="" method="post" enctype="multipart/form-data">
                <div class="card-body">
				 <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="">
                  </div>
				  
				   
				  <div class="form-group">
				  <div class="row">
				  <div class="col-md-6">
                    <label for="exampleInputEmail1">Image1</label>
                    <input type="file" class="form-control" name="image1">
                  </div>
				  
				   
				  <div class="col-md-6">
                    <label for="exampleInputEmail1">Image2</label>
                    <input type="file" class="form-control" name="image2">
                  </div>
				   </div>
				   </div>
				   
				
				  <div class="form-group" id="editor">
					<textarea class="ckeditor" cols="80" id="editor1" name="editor1" rows="10"></textarea>
<script>
  CKEDITOR.replace( 'editor1' );
</script>   
				  </div>
				
				
                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div></div>
	  
        </div>
    </section>
  </div>
<?php include 'footer.php';?>

</body>
</html>
