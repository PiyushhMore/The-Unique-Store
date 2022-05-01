

<?php
include 'db.php';
$sql1=mysqli_query($con1,"select * from customer");
$sql2=mysqli_query($con2,"select * from customer");
?>
<html>
<head>
 <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>
<div class="row">
<div class="col-md-6">
<table id="customers">
  <tr>
  <th>no</th>
    <th>Customer Name 1</th>
  </tr>
   <?php
   $i=1;
  while($row1=mysqli_fetch_array($sql1)) {
  ?>
  <tr>
  <td><?php echo $i++; ?></td>
  <td><?php echo $row1['cname']; ?></td>
  </tr><?php } ?>
</table></div>
<div class="col-md-6">
<table id="customers">
  <tr>
  <th>no</th>
    <th>Customer Name 2</th>
  </tr>
  
  <?php
   $j=1;
  while($row2=mysqli_fetch_array($sql2)) {
  ?>
  <tr>
   <td><?php echo $j++; ?></td>
  <td><?php echo $row2['cname']; ?></td>
  </tr><?php } ?>
</table>
</div>
</div>
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
</body>
</html>