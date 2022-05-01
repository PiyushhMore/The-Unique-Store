<?php 
session_start();
$pid=$_GET['pid'];

include 'db.php';
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
wrapper{
	width:600px;
	margin:50px auto;
	height:400px;
	position:relative;
	color:#fff;
	text-shadow:rgba(0,0,0,0.1) 2px 2px 0px;	
}

#slider-wrap{
	width:600px;
	height:400px;
	position:relative;
	overflow:hidden;
}

#slider-wrap ul#slider{
	width:100%;
	height:100%;
	
	position:absolute;
	top:0;
	left:0;		
}

#slider-wrap ul#slider li{
	float:left;
	position:relative;
	width:600px;
	height:400px;	
}

#slider-wrap ul#slider li > div{
	position:absolute;
	top:20px;
	left:35px;	
}

#slider-wrap ul#slider li > div h3{
	font-size:36px;
	text-transform:uppercase;	
}

#slider-wrap ul#slider li > div span{
	font-family: Neucha, Arial, sans serif;
	font-size:21px;
}

#slider-wrap ul#slider li i{
	text-align:center;
	line-height:400px;
	display:block;
	width:100%;
	font-size:90px;	
}


/*btns*/
.btns{
	position:absolute;
	width:50px;
	height:60px;
	top:50%;
	margin-top:-25px;
	line-height:57px;
	text-align:center;
	cursor:pointer;	
	background:rgba(0,0,0,0.1);
	z-index:100;
	
	
	-webkit-user-select: none;  
	-moz-user-select: none; 
	-khtml-user-select: none; 
	-ms-user-select: none;
	
	-webkit-transition: all 0.1s ease;
	-moz-transition: all 0.1s ease;
	-o-transition: all 0.1s ease;
	-ms-transition: all 0.1s ease;
	transition: all 0.1s ease;
}

.btns:hover{
	background:rgba(0,0,0,0.3);	
}

#next{right:-50px; border-radius:7px 0px 0px 7px;}
#previous{left:-50px; border-radius:0px 7px 7px 7px;}
#counter{
	top: 30px; 
	right:35px; 
	width:auto;
	position:absolute;
}
#slider-wrap.active #next{right:0px;}
#slider-wrap.active #previous{left:0px;}
#pagination-wrap{
	min-width:20px;
	margin-top:350px;
	margin-left: auto; 
	margin-right: auto;
	height:15px;
	position:relative;
	text-align:center;
}

#pagination-wrap ul {
	width:100%;
}

#pagination-wrap ul li{
	margin: 0 4px;
	display: inline-block;
	width:5px;
	height:5px;
	border-radius:50%;
	background:#fff;
	opacity:0.5;
	position:relative;
  top:0;
}
#pagination-wrap ul li.active{
  width:12px;
  height:12px;
  top:3px;
	opacity:1;
	box-shadow:rgba(0,0,0,0.1) 1px 1px 0px;	
}
h1, h2{text-shadow:none; text-align:center;}
h1{	color: #666; text-transform:uppercase;	font-size:36px;}
h2{ color: #7f8c8d; font-family: Neucha, Arial, sans serif; font-size:18px; margin-bottom:30px;} 
#slider-wrap ul, #pagination-wrap ul li{
	-webkit-transition: all 0.3s cubic-bezier(1,.01,.32,1);
	-moz-transition: all 0.3s cubic-bezier(1,.01,.32,1);
	-o-transition: all 0.3s cubic-bezier(1,.01,.32,1);
	-ms-transition: all 0.3s cubic-bezier(1,.01,.32,1);
	transition: all 0.3s cubic-bezier(1,.01,.32,1);	
}

@media screen and (max-width: 600px) {
	.image1{
	width:280px;
	height:500px:
	
}
.w3l-index-block2
{
	margin-top:-250px;
}
.w3l-index
{
	margin-top:40px;
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
.w3l-banner{
	margin-top:20px;
}
.navbar-toggler{
	margin-left:10px;
	margin-top:20px;
}
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
        <ul class="breadcrumbs-custom-path">
		<?php
		$sql=mysqli_query($conn,"select * from product where pid='$pid'" );
					while($row=mysqli_fetch_array($sql)) {
					?>
          <li><a href="index.php">Home</a></li>
          <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span><?php echo $row['pname'];?></li>
        </ul>
      </div>
    </section>
  </div>
  <!-- //inner banner -->
  <!-- about section -->
  <section class="w3l-index py-5">
        <div class="container py-md-4 py-3">
            <div class="title-heading-w3 text-center mx-auto">
                <h3 class="title-main" style="margin-top:-80px;"><?php echo $row['pname'];?></h3>
					</div><?php } ?><br><br>
			<?php 
					$sql=mysqli_query($conn,"select * from product as p LEFT JOIN category as c ON p.cpname=c.cid where c.cid='1'" );
					while($row=mysqli_fetch_array($sql)) {
					?>
            <div class="col-lg-6 left-img pr-lg-4">
            <img src="assets/images/<?php echo $row['image1'];?>" alt="" class="img-responsive img-fluid" style="margin-top:50px;"/>
			
          </div>
            <div class="col-lg-6 text-6-info mt-lg-0 mt-4">
            <h3 style="font-weight:bold; margin-top:70px;">Description:</h6>
            <p><?php echo $row['description']; ?>
			</p><?php } ?>
		    <h3 style="font-weight:bold;">Price:</h6>
			<p>Anant – The Limitless Art</p><br><br>
			<a class="btn btn-warning btn-style" style=" height: 45px;  width: 130px; text-align:center; font-size:18px;  padding-top: 10px;" href="cart.php?pid=<?php echo $pid; ?>" onclick="showAlert()" name="add_to_cart">Add To Cart</a>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a class="btn btn-warning btn-style" style=" height: 45px;  width: 130px; text-align:center; font-size:18px;  padding-top: 10px;" href="">Buy Now</a>
          </div>
        </div>
    </section>
	
	<script>
  function showAlert() {
    var myText = "please Login";
    alert (myText);
	window.location = "login.php";
  }
  </script>
	<?php include 'footer.php';?>
	
	</script>
	</body>
	</html>