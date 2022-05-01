<?php 
session_start();
$id=$_SESSION["mid"];
$name=$_SESSION["namez"];

if(empty($id)) {
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
   }
   .bn{
	   width:250px;
	   margin-left:10px;
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
            <h1><b>CUSTOMER</b></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Customer List</li>
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
                <h3 class="card-title">Customer List</h3> 
				<a href=""><button class="btn btn-warning b"><b>ADD NEW</b></button></a>
				<a href="home.php"><button class="btn btn-warning b"><b>BACK</b></button></a>
              </div>
			   
			   <div class="card-header">
			   <div class="row">
			   <div class="col-md-4">
                <input type="text" id="myInput" class="form-control bn" onkeyup="myFunction()"  placeholder="Search for names.." title="Type in a name"></div>
				
				<div class="col-md-4">
				 <input type="text" id="myInput1" class="form-control bn" onkeyup="myFunction1()"  placeholder="Search for names.." title="Type in a name"></div>
				 
				 <div class="col-md-4">
				  <input type="text" id="myInput2" class="form-control bn" onkeyup="myFunction2()"  placeholder="Search for names.." title="Type in a name"></div></div>
              </div>
              <!-- /.card-header -->
              <div class="card-body cr">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Product Name</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>X</td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 5.0
                    </td>
                    <td>Win 95+</td>
                    <td>5</td>
                    <td>C</td>
                  </tr>
                 
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
  <script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("example2");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
<
  </script>
  
  <script>
function myFunction1() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput1");
  filter = input.value.toUpperCase();
  table = document.getElementById("example2");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
<
  </script>
  
  <script>
function myFunction2() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput2");
  filter = input.value.toUpperCase();
  table = document.getElementById("example2");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
<
  </script>
  <?php include 'footer.php';?>
  
</div>

<?php include 'script.js'; ?>
</body>
</html>
