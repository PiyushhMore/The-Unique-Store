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
            <h1><b>Blog</b></h1> 
			
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Blog-Posts</li>
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
                <h3 class="card-title">Blogs</h3> 
				<a href="blogs.php"><button class="btn btn-warning b"><b>ADD NEW</b></button></a>
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
					<th>Title</th>
					<th>Image1</th>
					<th>Image2</th>
					<th>Content</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody id="geeks">
				  <?php
				   $query_date = date("Y-m-d");
				  $i=1;
				  
				 $results1 = mysqli_query($conn, "select * from blog_posts");
                  while ($row1 = mysqli_fetch_array($results1)) { 
			
				  ?>
                  <tr>
                      <td><?php echo $i; ?></td>
					  <td><?php echo $row1['title']; ?></td>
					  <td><img src="images/<?php echo $row1['image1']; ?>" width="70" alt="<?php echo $row1['image1']; ?>" height="70"></td>
					  <td><img src="images/<?php echo $row1['image2']; ?>" width="70" height="70"></td>
					 
					 <td><?php echo $row1['content']; ?></td>
					
					  <td><a href="blog_update.php?id=<?php echo $row1['bid']; ?>" ><i class="fa fa-edit" style="font-size: 20px;color: black"></i></a>
					 
					 <a href="blog_delete.php?id=<?php echo $row1['bid']; ?>"><i class="fa fa-trash" onclick="doconfirm()" style="font-size: 20px;color: red;" ></i></a></td>
					 
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
