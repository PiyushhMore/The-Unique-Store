<?php 
session_start();
$uid=$_SESSION['uid'];
$name=$_SESSION["namez"];
$pid2=$_GET['id'];

if(empty($uid)) {
	header("Location:index.php");
}
include 'db.php';

if( isset($_POST['add'])  ) {
	
	$pname=$_POST['product'];
	$cpname=$_POST['cpname'];
	$spname=$_POST['spname'];
	$sizep=$_POST['sizep'];
	$mpname=$_POST['mpname'];
	$fpname=$_POST['fpname'];
	$dimension=$_POST['dimension'];
	$no_of_contents=$_POST['no_of_contents'];
	$specification=$_POST['specification'];
	$ppcode=$_POST['ppcode'];
	$colour=$_POST['colour'];
	$pcode=$_POST['code'];
	$imgFile1 = $_FILES['image1']['name'];
	$imgFile2 = $_FILES['image2']['name'];
	$imgFile3= $_FILES['image3']['name'];
	$imgFile4 = $_FILES['image4']['name'];
	$description=$_POST['description'];
	$product_information=$_POST['product_information'];
	$care_instructions=$_POST['care_instructions'];
	$price=$_POST['price'];
	$pid=$_POST['pid'];
	$img1=$_POST['img1'];
	$img2=$_POST['img2'];
	$img3=$_POST['img3'];
	$img4=$_POST['img4'];
	
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
	if($imgFile3){
		$pic3=$_FILES['image3']['name'];;
	}
	else{
		$pic3=$img3;
	}
	if($imgFile4){
		$pic4=$_FILES['image4']['name'];;
	}
	else{
		$pic4=$img4;
	}
	
	
        $target_dir = "images/";
 if(!is_dir($target_dir))
 {
mkdir($target_dir, 0777, true);
 }
$target_file1 = $target_dir . basename($_FILES["image1"]["name"]);
$target_file2 = $target_dir . basename($_FILES["image2"]["name"]);
$target_file3 = $target_dir . basename($_FILES["image3"]["name"]);
$target_file4 = $target_dir . basename($_FILES["image4"]["name"]);

move_uploaded_file($_FILES["image2"]["tmp_name"], $target_file2);
move_uploaded_file($_FILES["image3"]["tmp_name"], $target_file3);
move_uploaded_file($_FILES["image4"]["tmp_name"], $target_file4);
 
 if (move_uploaded_file($_FILES["image1"]["tmp_name"], $target_file1)) 
 {
    echo "The file ". basename( $_FILES["image1"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
 
	
	
	$sql1=mysqli_query($conn,"select ccode,cname from category where cid='$cpname'");
	$row1=mysqli_fetch_array($sql1);
	$ccode=$row1['ccode'];
	$cat=$row1['cname'];

	$sql2=mysqli_query($conn,"select scode from subcategory where sid='$spname'");
	$row2=mysqli_fetch_array($sql2);
	$scode=$row2['scode'];	
	
	$sql3=mysqli_query($conn,"select mcode from material where mid='$mpname'");
	$row3=mysqli_fetch_array($sql3);
	$mcode=$row3['mcode'];	
	
	$sql4=mysqli_query($conn,"select fcode from finish where fid='$fpname'");
	$row4=mysqli_fetch_array($sql4);
	$fcode=$row4['fcode'];
	
	$sql5=mysqli_query($conn,"select szcode from size where sid='$sizep'");
	$row5=mysqli_fetch_array($sql5);
	$szcode=$row5['szcode'];
	
	
	if($cat=='Coasters')
	{
	     $code=$ccode.$scode.$mcode.$fcode.$pcode;
	}
	
	elseif($cat=='Serving Tray')
	{
		$code=$ccode.$scode.$mcode.$szcode.$pcode;
	}
	else
	{
		$code=$ccode.$scode.$mcode.$ppcode;
	}
	
	
	$sql=mysqli_query($conn, "update product set pname='$pname',cpname='$cpname',spname='$spname',sizep='$sizep',mpname='$mpname',fpname='$fpname',dimension='$dimension',no_of_contents='$no_of_contents',specification='$specification',ppcode='$ppcode',colour='$colour',pcode='$pcode',code='$code',image1='$pic1',image2='$pic2',image3='$pic3',image4='$pic4',description='$description',product_information='$product_information',care_instructions='$care_instructions',price='$price' where pid='$pid'") or die(mysqli_error($conn));
	
	if($sql) {
		
		echo "<script type='text/javascript'>alert('Successfully updated the product Details..!');</script>";
					  echo "<script>document.location='product_main.php'</script>";
	} else {
		echo "<script type='text/javascript'>alert('Successfully not updated the product Details..!');</script>";
					  echo "<script>document.location='product_main.php'</script>";
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
            <h1 class="m-0 text-dark">UPDATE PRODUCT</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">product</li>
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
                <h3 class="card-title">UPDATE PRODUCT</h3>
              </div>
			  
              <form action="" method="post" enctype="multipart/form-data">
                <div class="card-body">
				
				<?php
				
				$sql = mysqli_query($conn, "select * from product as p LEFT JOIN category as ct ON p.cpname=ct.cid LEFT JOIN subcategory as sb ON p.spname=sb.sid LEFT JOIN size as sz ON p.sizep=sz.sid LEFT JOIN material as mt ON p.mpname=mt.mid LEFT JOIN finish as fs ON p.fpname=fs.fid where pid='$pid2'");
				while($row=mysqli_fetch_array($sql)) 
				{
				?>
						
				
				<div class="form-group">
				<label for="exampleInputEmail1">Product Name</label>
                    <input type="text" class="form-control" name="product" value="<?php echo $row['pname']; ?>">
                  </div>
				
				 <div class="form-group">
                 <label for="exampleInputPassword1">Category Name</label>
			   <select class="form-control" name="cpname">
					<option value="<?php echo $row['cpname']; ?>"><?php echo $row['cname']; ?></option>
					<?php 
					$sql=mysqli_query($conn,"select * from category");
					while($row1=mysqli_fetch_array($sql)) {
					?>
               		<option value="<?php echo $row1['cid']; ?> (<?php echo $row1['ccode'];?>)"><?php echo $row1['cname']; ?>(<?php echo $row1['ccode'];?>)</option><?php } ?>
			   </select>
                </div>
				 <input type="hidden" class="form-control" name="pid" value="<?php echo $pid2; ?>">
				
				 
				 <div class="form-group">
                 <label for="exampleInputPassword1">SubCategory Name</label>
			   <select class="form-control" name="spname">
					<option value="<?php echo $row['spname']; ?>"><?php echo $row['scname']; ?></option>
					<?php 
					$sql=mysqli_query($conn,"select * from subcategory");
					while($row1=mysqli_fetch_array($sql)) {
					?>
               		<option value="<?php echo $row1['sid']; ?> (<?php echo $row1['scode'];?>)"><?php echo $row1['scname']; ?>(<?php echo $row1['scode'];?>)</option><?php } ?>
			   </select>
                </div>
				
				
				<div class="form-group">
                 <label for="exampleInputPassword1">Size</label>
			   <select class="form-control" name="sizep">
					<option value="<?php echo $row['sizep']; ?>"><?php echo $row['size']; ?></option>
					<?php 
					$sql=mysqli_query($conn,"select * from size");
					while($row1=mysqli_fetch_array($sql)) {
					?>
               		<option value="<?php echo $row1['sid']; ?> (<?php echo $row1['szcode'];?>)"><?php echo $row1['size']; ?>(<?php echo $row1['szcode']; ?>)</option><?php } ?>
			   </select>
                </div>
				
				<div class="form-group">
                 <label for="exampleInputPassword1">Material Name</label>
			   <select class="form-control" name="mpname">
					<option value="<?php echo $row['mpname']; ?>"><?php echo $row['mname']; ?></option>
					<?php 
					$sql=mysqli_query($conn,"select * from material");
					while($row1=mysqli_fetch_array($sql)) {
					?>
               		<option value="<?php echo $row1['mid']; ?> (<?php echo $row1['mcode'];?>)"><?php echo $row1['mname']; ?>(<?php echo $row1['mcode']; ?>)</option><?php } ?>
			   </select>
                </div>
				
				
				<div class="form-group">
                 <label for="exampleInputPassword1">Finish Product Name</label>
			   <select class="form-control" name="fpname">
					<option value="<?php echo $row['fpname']; ?>"><?php echo $row['fname']; ?></option>
					<?php 
					$sql=mysqli_query($conn,"select * from finish");
					while($row1=mysqli_fetch_array($sql)) {
					?>
               		<option value="<?php echo $row1['fid']; ?> (<?php echo $row1['fcode']; ?>)"><?php echo $row1['fname']; ?>(<?php echo $row1['fcode']; ?>)</option><?php } ?>
			   </select>
                </div>
				
				<div class="form-group">
				<label for="exampleInputEmail1">Dimension</label>
                    <input type="text" class="form-control" name="dimension" value="<?php echo $row['dimension']; ?>">
                  </div>
				
				<div class="form-group">
				<label for="exampleInputEmail1">No of Contents</label>
                    <input type="text" class="form-control" name="no_of_contents" value="<?php echo $row['no_of_contents']; ?>">
                  </div>
				  
				  <div class="form-group">
				<label for="exampleInputEmail1">Specifications</label>
                    <input type="text" class="form-control" name="specification" value="<?php echo $row['specification']; ?>">
                  </div>
				  
				  <div class="form-group">
				<label for="exampleInputEmail1">Code</label>
                    <input type="text" class="form-control" name="ppcode" value="<?php echo $row['ppcode']; ?>">
                  </div>
				  
				
				<div class="form-group">
				<div class="row">
				 <div class="col-md-6">
				<label for="exampleInputEmail1">Colour/Print</label>
                    <input type="text" class="form-control" name="colour" value="<?php echo $row['colour']; ?>">
                  </div>
				  
				  <div class="col-md-6">
				<label for="exampleInputEmail1">Code</label>
                    <input type="text" class="form-control" name="code" value="<?php echo $row['pcode']; ?>">
                  </div>
				  </div>
				  </div>
				  
				  
				  <div class="form-group">
				  <div class="row">
				  <div class="col-md-6">
                    <label for="exampleInputEmail1">Image1</label>
                    <input type="file" class="form-control" name="image1" id="exampleInputEmail1" >
                  </div>
				  <input type="hidden" class="form-control" name="img1" value="<?php echo $row['image1']; ?>">
				   <input type="hidden" class="form-control" name="img2" value="<?php echo $row['image2']; ?>">
				    <input type="hidden" class="form-control" name="img3" value="<?php echo $row['image3']; ?>">
					 <input type="hidden" class="form-control" name="img4" value="<?php echo $row['image4']; ?>">
				   
				  <div class="col-md-6">
                    <label for="exampleInputEmail1">Image2</label>
                    <input type="file" class="form-control" name="image2" id="exampleInputEmail1">
                  </div>
				   </div></div>
				   <div class="form-group">
				  <div class="row">
				  <div class="col-md-6">
                    <label for="exampleInputEmail1">Image3</label>
                    <input type="file" class="form-control" name="image3" id="exampleInputEmail1">
                  </div>
				  
				  <div class="col-md-6">
                    <label for="exampleInputEmail1">Image4</label>
                    <input type="file" class="form-control" name="image4" id="exampleInputEmail1">
                  </div>
				   </div></div>
				  
				   <div class="form-group">
				<label for="exampleInputEmail1">Product Description</label>
                   <textarea  rows="3" cols="60" class="form-control" name="description"><?php echo $row['description'];?></textarea>
                  </div>
				  
				  <div class="form-group">
				<label for="exampleInputEmail1">Product Information</label>
                   <textarea  rows="3" cols="60" class="form-control" name="product_information"><?php echo $row['product_information'];?></textarea>
                  </div>
				  
				  <div class="form-group">
				<label for="exampleInputEmail1">Care instructions</label>
                   <textarea  rows="3" cols="60" class="form-control" name="care_instructions"><?php echo $row['care_instructions'];?></textarea>
                  </div>
				  
				  <div class="form-group">
				<label for="exampleInputEmail1">Price</label>
                   <input type="number" class="form-control" name="price" value="<?php echo $row['price'];?>">
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
