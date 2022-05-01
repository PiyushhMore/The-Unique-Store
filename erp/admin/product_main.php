<?php 
session_start();
error_reporting(null);
$uid=$_SESSION['uid'];
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
 .b{
	 margin-left:100px;
	 width:150px;
 }
  .cr {
   overflow:scroll;
    width:100%;
	height:600px;
   }
   .bn{
	   width:350px;
	   margin-left:10px;
   }
   .bk{
	   width:250px;
	   margin-left:60px;
   }
   .hidden {
	   display : none;
   }
</style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
<?php
 include 'header.php';
 include 'sidebar.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><b>Product</b></h1> 
			
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Product</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

  <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header bg-primary">
                <h3 class="card-title">Product Details</h3> 
				<a href="add_productmain.php"><button class="btn btn-warning b"><b>ADD NEW</b></button></a>
				<a href="home.php"><button class="btn btn-warning b"><b>BACK</b></button></a>
              </div>
			   
			   <div class="card-header">
				 <input id="gfg" type="text" class="form-control" placeholder="Search here"> 
              </div>
              <!-- /.card-header -->
              <div class="card-body cr">
                <table id="example6" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>SR.NO</th>
					<th>Product</th>
                    <th>Category</th>
					<th>SubCategory</th>
					<th>Size</th>
					<th>Material</th>
					<th>Finish Product</th>
					<th>Dimension</th>
					<th>No of content</th>
					<th>Specification</th>
					<th>Pcode</th>
					<th>Colour/Print</th>
					<th>Code</th>
					<th>Image1</th>
					<th>Image2</th>
					<th>Image3</th>
					<th>Image4</th>
					<th>Product Description</th>
					<th>Product Information</th>
					<th>Care Instructions</th>
					<th>Price</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody id="geeks">
				  <?php
				   $query_date = date("Y-m-d");
				  $i=1;
				  
				  $results1 = mysqli_query($conn, "select * from product as p LEFT JOIN category as ct ON p.cpname=ct.cid LEFT JOIN subcategory as sb ON p.spname=sb.sid LEFT JOIN size as sz ON p.sizep=sz.sid LEFT JOIN material as mt ON p.mpname=mt.mid LEFT JOIN finish as fs ON p.fpname=fs.fid");
                  while ($row1 = mysqli_fetch_array($results1)) { 
			
				  ?>
                  <tr>
                      <td><?php echo $i; ?></td>
					  <td><?php echo $row1['pname']; ?></td>
                      <td><?php echo $row1['cname']; ?>(<?php echo $row1['ccode']; ?>)</td>
					  <td><?php echo $row1['scname']; ?>(<?php echo $row1['scode']; ?>)</td>
					  <td><?php echo $row1['size']; ?>(<?php echo $row1['szcode']; ?>)</td>
					  <td><?php echo $row1['mname']; ?>(<?php echo $row1['mcode']; ?>)</td>
					  <td><?php echo $row1['fname']; ?>(<?php echo $row1['fcode']; ?>)</td>
					  <td><?php echo $row1['dimension']; ?></td>
					  <td><?php echo $row1['no_of_contents']; ?></td>
					  <td><?php echo $row1['specification']; ?></td>
					  <td><?php echo $row1['ppcode']; ?>
					  <td><?php echo $row1['colour']; ?></td>
					  <td><?php echo $row1['code']; ?></td>
					  <td><img src="images/<?php echo $row1['image1']; ?>" width="70" alt="<?php echo $row1['image1']; ?>" height="70"></td>
					  <td><img src="images/<?php echo $row1['image2']; ?>" width="70" height="70"></td>
					  <td><img src="images/<?php echo $row1['image3']; ?>" width="70" height="70"></td>
					  <td><img src="images/<?php echo $row1['image4']; ?>" width="70" height="70"></td>
					 <td><?php echo $row1['description']; ?></td>
					  <td><?php echo $row1['product_information']; ?></td>
					   <td><?php echo $row1['care_instructions']; ?></td>
					 <td>&#8377;<?php echo $row1['price']; ?></td>
					  <td><a href="product_update.php?id=<?php echo $row1['pid']; ?>" ><i class="fa fa-edit" style="font-size: 20px;color: black"></i></a>
					 
					 <a href="product_delete.php?id=<?php echo $row1['pid']; ?>"><i class="fa fa-trash" onclick="doconfirm()" style="font-size: 20px;color: red;" ></i></a></td>
					 
				  <?php $i++; }  ?>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
   <script src= 
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> 
    </script> 
  <script> 
            $(document).ready(function() { 
                $("#gfg").on("keyup", function() { 
                    var value = $(this).val().toLowerCase(); 
                    $("#geeks tr").filter(function() { 
                        $(this).toggle($(this).text() 
                        .toLowerCase().indexOf(value) > -1) 
                    }); 
                }); 
            }); 
        </script> 
  <script>
function doconfirm()
{
    job=confirm("Are you sure to delete permanently?");
    if(job!=true)
    {
        return false;
    }
}
</script>
  
  <?php include 'footer.php';?>
  
</div>

<?php include 'script.js'; ?>
</body>
</html>
