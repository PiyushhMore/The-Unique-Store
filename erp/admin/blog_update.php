<?php 
session_start();
$uid=$_SESSION['uid'];
$name=$_SESSION["namez"];
$bid=$_GET['id'];

if(empty($uid)) {
	header("Location:index.php");
}
include 'db.php';

if( isset($_POST['submit'])  ) {
	
	$title=$_POST['title'];
	$content=$_POST['content'];
	
	$imgFile1 = $_FILES['image1']['name'];
	$imgFile2 = $_FILES['image2']['name'];
	$bid=$_POST['bid'];
	$img1=$_POST['img1'];
	$img2=$_POST['img2'];
	
	
	if($imgFile1){
		$pic1=$_FILES['image1']['name'];;
	}
	else{
		$pic1=$img1;
	}
	if($imgFile2){
		$pic2=$_FILES['image2']['name'];;
	}
	else{
		$pic2=$img2;
	}
	
	
	
        $target_dir = "images/";
 if(!is_dir($target_dir))
 {
mkdir($target_dir, 0777, true);
 }
$target_file1 = $target_dir . basename($_FILES["image1"]["name"]);
$target_file2 = $target_dir . basename($_FILES["image2"]["name"]);


move_uploaded_file($_FILES["image2"]["tmp_name"], $target_file2);

 
 if (move_uploaded_file($_FILES["image1"]["tmp_name"], $target_file1)) 
 {
    echo "The file ". basename( $_FILES["image1"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
 
	
	$sql=mysqli_query($conn, "update blog_posts set title='$title',image1='$pic1',image2='$pic2',content='$content' where bid='$bid'") or die(mysqli_error($conn));
	
	if($sql) {
		
		echo "<script type='text/javascript'>alert('Successfully updated the blog..!');</script>";
					  echo "<script>document.location='dispblog.php'</script>";
	} else {
		echo "<script type='text/javascript'>alert('Successfully not updated the blog..!');</script>";
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
            <h1 class="m-0 text-dark">UPDATE Blog</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Blog_POSTS</li>
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
                <h3 class="card-title">UPDATE Blog</h3>
              </div>
			  
              <form action="" method="post" enctype="multipart/form-data">
                <div class="card-body">
				
				<?php
				$sql=mysqli_query($conn,"select * from blog_posts where bid='$bid'");
				while($row=mysqli_fetch_array($sql)) 
				{
				?>
				
				 <div class="form-group">
                  <label for="exampleInputPassword1">Title</label>
			     <input type="text" class="form-control" name="title" value="<?php echo $row['title']; ?>">
			   </div>
			   
			   
				 <input type="hidden" class="form-control" name="bid" value="<?php echo $bid; ?>">
				 
				 <div class="form-group">
				  <div class="row">
				  <div class="col-md-6">
                    <label for="exampleInputEmail1">Image1</label>
                    <input type="file" class="form-control" name="image1" >
                  </div>
				  <input type="hidden" class="form-control" name="img1" value="<?php echo $row['image1']; ?>">
				   <input type="hidden" class="form-control" name="img2" value="<?php echo $row['image2']; ?>">
				   
				  <div class="col-md-6">
                    <label for="exampleInputEmail1">Image2</label>
                    <input type="file" class="form-control" name="image2" id="exampleInputEmail1">
                  </div>
				   </div></div>
				 
				 
				 <div class="form-group" id="editor">
					<textarea class="ckeditor" cols="80" id="editor1" name="content" rows="10"><?php echo $row['content'];?></textarea>
<script>
  CKEDITOR.replace( 'editor1' );
</script>   
				  </div>
				  
				  
				<?php } ?>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div></div>
	  
        </div>
    </section>
  </div>
<?php include 'footer.php';?>