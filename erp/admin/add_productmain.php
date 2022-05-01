<?php 
session_start();
$uid=$_SESSION["uid"];
$name=$_SESSION["namez"];

if(empty($uid)) {
	header("Location:index.php");
}
include 'db.php';


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
            <h1 class="m-0 text-dark">ADD PRODUCT</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">PRODUCT</li>
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
                <h3 class="card-title">ADD PRODUCT</h3>
              </div>
				
              <form action="add.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
				 <div class="form-group">
				 
                    <label for="exampleInputEmail1">Product Name</label>
                    <input type="text" class="form-control" name="product" id="exampleInputEmail1" placeholder="Product Name">
                  </div>
				  
				
				 <div class="form-group">
                  <label for="exampleInputPassword1">Category Name</label>
			    <select class="form-control" style="width: 100%;" name="cpname" id="cat" onchange="showMe(this);">
				
				<option value="">--- Please Select ---</option>
					<?php 
					$sql=mysqli_query($conn,"select * from category");
					while($row=mysqli_fetch_array($sql)) {
					?>
               		<option value="<?php echo $row['cid']; ?>"><?php echo $row['cname']; ?> (<?php echo $row['ccode']; ?>)</option><?php } ?>
				</select>
                  </div>
				
				  <div class="form-group">
                  <label for="exampleInputPassword1" id="subcategory">SubCategory Name</label>
			        <select class="form-control" style="width: 100%;" id="scat" name="spname">
                    <option value="">--Select subcategory--</option>
                    </select>
                  </div>
				  
				  <div class="form-group">
                  <label for="exampleInputPassword1">Material</label>
			    <select class="form-control" style="width: 100%;" name="mpname">
				<option value="">--- Please Select ---</option>
					<?php 
					$sql=mysqli_query($conn,"select * from material");
					while($row=mysqli_fetch_array($sql)) {
					?>
               		<option value="<?php echo $row['mid']; ?>"><?php echo $row['mname']; ?> (<?php echo $row['mcode']; ?>)</option><?php } ?>
			   </select>
                  </div>
				  
				  <div id="idShowMe" style="display: none">
				   <div class="form-group">
                  <label for="exampleInputPassword1">Size</label>
			    <select class="form-control" style="width: 100%;" name="sizep">
				<option value="">--- Please Select ---</option>
					<?php 
					$sql=mysqli_query($conn,"select * from size");
					while($row=mysqli_fetch_array($sql)) {
					?>
               		<option value="<?php echo $row['sid']; ?>"><?php echo $row['size']; ?> (<?php echo $row['szcode']; ?>)</option><?php } ?>
			    </select>
                  </div></div>
				  
				  <div class="form-group">
                  <label for="exampleInputPassword1">Finish</label>
			    <select class="form-control" style="width: 100%;" name="fpname" >
				<option value="">--- Please Select ---</option>
					<?php 
					$sql=mysqli_query($conn,"select * from finish");
					while($row=mysqli_fetch_array($sql)) {
					?>
               		<option value="<?php echo $row['fid']; ?>"><?php echo $row['fname']; ?> (<?php echo $row['fcode']; ?>)</option><?php } ?>
			    </select>
                  </div>
				  
				  
				   <div class="form-group">
                    <label for="exampleInputEmail1">Dimension</label>
                    <input type="text" class="form-control" name="dimension" id="exampleInputEmail1" placeholder="Dimension">
                  </div>
				  
				  
				   <!--<div id="idShowMe3" style="display: none">-->
				   <div class="form-group">
                    <label for="exampleInputEmail1">No of contents</label>
                    <input type="text" class="form-control" name="no_of_contents" id="exampleInputEmail1" placeholder="No of contents">
                  </div>
				 
				  <div class="form-group">
                    <label for="exampleInputEmail1">Specification</label>
                    <input type="text" class="form-control" name="specification" id="exampleInputEmail1" placeholder="Specification">
                  </div>
				  
				  
				   <div class="form-group">
                    <label for="exampleInputEmail1">code</label>
                    <input type="text" class="form-control" name="ppcode" id="exampleInputEmail1" placeholder="code">
                  </div>
				<!--</div>-->
			
				 <div class="form-group">
				  <div class="row">
				  <div class="col-md-6">
                    <label for="exampleInputEmail1">Colour/Print</label>
                    <input type="text" class="form-control" name="colour" id="exampleInputEmail1" placeholder="colour">
                  </div>
				  
				   
				  <div class="col-md-6">
                    <label for="exampleInputEmail1">Colour Code</label>
                    <input type="text" class="form-control" name="code" id="exampleInputEmail1" placeholder="Colour Code">
                  </div>
				   </div></div>
				   
				   <div class="form-group">
				  <div class="row">
				  <div class="col-md-6">
                    <label for="exampleInputEmail1">Image1</label>
                    <input type="file" class="form-control" name="image1" id="exampleInputEmail1" placeholder="image">
                  </div>
				  
				   
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
                    <input type="file" class="form-control" name="image4" id="exampleInputEmail1" >
                  </div>
				   </div></div>
				   
				  <div class="form-group">
					    <label> Product Description</label>
				       <textarea  rows="3" cols="60" class="form-control" name="description"></textarea>
                </div>
				
				<div class="form-group">
					    <label> Product Information</label>
				       <textarea  rows="3" cols="60" class="form-control" name="product_information"></textarea>
                </div>
				
				<div class="form-group">
					    <label> Care Instructions </label>
				       <textarea  rows="3" cols="60" class="form-control" name="care_instructions"></textarea>
                </div>
				
				<div class="form-group">
					<label>Price</label>
					<input type="number" class="form-control" name="price" id="exampleInputEmail1" placeholder="price">
                <!-- /.card-body -->
			</div>
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
<script>
function 
    showMe(e) {
    var strdisplay = e.options[e.selectedIndex].value;
    var e = document.getElementById("idShowMe");
    if(strdisplay == "1") {
        e.style.display = "none";
    } else {
        e.style.display = "block";
    }
}


/*function 
    showMe(e) {
    var strdisplay = e.options[e.selectedIndex].value;
    var e = document.getElementById("idShowMe3");
    if(strdisplay == "1") {
        e.style.display = "none";
    } else {
        e.style.display = "block";
    }
}*/

</script>
<script>
$(document).ready(function(){

    $("#cat").change(function(){
        var deptid = $(this).val();

        $.ajax({
            url: 'load_data.php',
            type: 'post',
            data: {depart:deptid},
            dataType: 'json',
            success:function(response){

                var len = response.length;

                $("#scat").empty();
                for( var i = 0; i<len; i++){
                    var id = response[i]['id'];
                    var name = response[i]['name'];
					 var scode = response[i]['scode'];
                    
                    $("#scat").append("<option value='"+id+"'>"+name+"("+scode+")</option>");

                }
            }
        });
    });

});
</script>
	