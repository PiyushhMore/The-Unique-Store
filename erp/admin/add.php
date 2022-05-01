<?php 
session_start();
$uid=$_SESSION["uid"];
$name=$_SESSION["namez"];

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
	$pcode=$_POST['code'];
	$colour=$_POST['colour']." (".$pcode.")";

	
	
    $imgFile1 = $_FILES["image1"]["name"]; 
	$imgFile2 = $_FILES["image2"]["name"]; 
	$imgFile3 = $_FILES["image3"]["name"]; 
	$imgFile4 = $_FILES["image4"]["name"]; 
    
    $folder1 = "images/".$imgFile1; 
	$folder2 = "images/".$imgFile2; 
	$folder3 = "images/".$imgFile3; 
	$folder4 = "images/".$imgFile4; 
          
    
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
 
 if (move_uploaded_file($_FILES["image1"]["tmp_name"], $target_file1)) {
    echo "The file ". basename( $_FILES["image1"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
 
 
 	
	$description=$_POST['description'];
	$product_information=$_POST['product_information'];
	$care_instructions=$_POST['care_instructions'];
	$price=$_POST['price'];
  
	$sql1=mysqli_query($conn,"select ccode,cname from category where cid='$cpname'");
	$row1=mysqli_fetch_array($sql1);
	$ccode=$row1['ccode'];
	$cat=$row1['cname'];
	
	echo $cat;

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
		$code=$ccode.$scode.$szcode.$mcode.$pcode;
	}
	else
	{
		$code=$ccode.$scode.$mcode.$ppcode;
	}
		
   echo $code;
	
	$sql = mysqli_query($conn,"INSERT INTO product(pname,cpname,spname,sizep,mpname,fpname,dimension,no_of_contents,specification,ppcode,colour,code,pcode,image1,image2,image3,image4,description,product_information,care_instructions,price)VALUES ('$pname','$cpname','$spname','$sizep','$mpname','$fpname','$dimension','$no_of_contents','$specification','$ppcode','$colour','$code','$pcode','$imgFile1','$imgFile2','$imgFile3','$imgFile4','$description','$product_information','$care_instructions','$price')") or die(mysqli_error($conn));
	
	if($sql) {
		
		echo "<script type='text/javascript'>alert('Successfully added the product..!');</script>";
					  echo "<script>document.location='product_main.php'</script>";
	} else {
		echo "<script type='text/javascript'>alert('Successfully not added the product..!');</script>";
					  echo "<script>document.location='product_main.php'</script>";
	} 
	
}
//$sql1=mysqli_query($conn,"select * from category");

?>


