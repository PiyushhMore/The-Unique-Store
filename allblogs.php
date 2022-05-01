<?php 
session_start();
include 'db.php';
$bid=$_GET['bid'];
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Anant-The Limitless Art</title>
  <!-- google-fonts -->
  <link
    href="//fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,400;1,600;1,700&display=swap"
    rel="stylesheet">
  <!-- //google-fonts -->
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
</head>
<body>
  <!--header-->
 
<!doctype html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Anant Traders</title>
    <!-- google-fonts -->
    <link href="//fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style-starter.css">

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />


<style>


@media screen and (max-width: 600px) {
	.image1{
	width:280px;
	height:500px:
	
}
.w3l-text-6 img {
	width:290px;
}
.w3l-breadcrumb img {
	width:340px;
	height:200px;
	margin-right:-70px;
	
}
.w3l-index-block2
{
	margin-top:-250px;
}
.a1{
	margin-top:30px;
	margin-left:20px;
}
.b1{
	display:none;
}
.c1{
	display:none;
}

}
.w3_stats {
	margin-top:-100px;
}
.w3l-new-block-6{
	margin-top:-100px;
}
.card-body{
	
	 padding-left: 30px;
    padding-right: 30px;
    box-shadow: 0 0px 20px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
	margin-left:10px;
	border-radius:40px;
	
	
 }
 .w3l-text-6 h2 {
	 font-color:#E4B333;
 }
 .w3l-text-6{
	 margin-top:-50px;
 }
 .inner-banner{
	 margin-top:-50px;
	 
 }
 
</style>

</head>
<body>
    <!--header-->
  <?php include 'nav.php'; ?>
  <!--//header-->
  <!-- inner banner -->
 
    <div class="inner-banner">
        <section class="w3l-breadcrumb">
            <div class="container">
			<?php 
					$sql=mysqli_query($conn,"select * from blog_posts where bid='$bid'");
					$row=mysqli_fetch_array($sql)
					?>
					<img src="assets/images/<?php echo $row['image2'];?>" alt=""   height="300" width="1260" style="margin-left:-60px;"/><br><br>
                <ul class="breadcrumbs-custom-path">
				
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Blog Post</li>
					<li><a href="blogs.php"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Back</a></li>
                </ul>
            </div>
        </section>
    </div>
	<br><br>
	
	<section class="w3l-text-6 py-5" id="about">
    <div class="text-6-mian py-md-5">
      <div class="container">
	<div class="card-body">
       <?php 
					$sql=mysqli_query($conn,"select * from blog_posts where bid='$bid'");
					while($row=mysqli_fetch_array($sql)) {
					?>
            <h2><center><?php echo $row['title'];?></center></h2>
			<img src="assets/images/<?php echo $row['image1'];?>" alt=""   height="400" width="1100"/>
            <p><?php echo $row['content'];?>
			</p>
      
					<?php } ?>
	  </div><br>
   </div>
	</div>
</section>

<?php include 'footer.php' ?>

</body>
</html>