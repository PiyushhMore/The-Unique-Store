<?php 
session_start();
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


<style>
@media screen and (max-width: 600px) {
	.image1{
	width:280px;
	height:500px:
	
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
	margin-left:20px;
	border-radius:40px;
	
 }
 .w3l-new-block1-6{
	 margin-top:-100px;
 }

</style>

</head>
<body>
    <!--header-->
  <?php include 'nav.php'; ?>
  <!--//header-->
  <!-- inner banner -->
 
    <div class="inner-banner">
        <section class="w3l-breadcrumb1">
            <div class="container">
                <ul class="breadcrumbs1-custom-path">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Blog Posts</li>
                </ul>
            </div>
        </section>
    </div>
	<br><br>
 
<div class="w3l-new-block1-6 py-5">
        <div class="container py-md-4 py-3">
			
			<?php 
					$sql=mysqli_query($conn,"select * from blog_posts");
					while($row=mysqli_fetch_array($sql)) {
					?>
					<div class="col-md-4">
					<div class="grids5-info">
                  <a href="#blog"><img src="assets/images/<?php echo $row['image1'];?>" alt="" class="img-fluid" style="height:250px;"/></a>
                    <h4><a href="#blog"><?php echo $row['title'];?></a></h4>
                   <ul class=" admin-list">
                       <li><a href="#blog"><span class=" fa fa-user" aria-hidden="true"></span>by
                                Admin</a></li>
                        <li><a href="#blog"><span class=" fa fa-comments-o" aria-hidden="true"></span>9
                                Comments</a></li>
                    </ul>
                    <p><?php echo substr($row['content'],0,200);?></p>
					
					<a href="allblogs.php?bid=<?php echo $row['bid'];?>" style="font-size:18px;">Read More</a>
               </div>
				</div>
				
				<?php } ?>
      
   </div>
  </div>
  
  <?php include 'footer.php';?>
  
  </body>
  </html>