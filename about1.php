<?php 
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> The Unique Store</title>
  <!-- google-fonts -->
  <link
    href="//fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,400;1,600;1,700&display=swap"
    rel="stylesheet">
  <!-- //google-fonts -->
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <style>
  .w3l-text-6{
	margin-top:-60px;
}
.w3_stats{
	margin-top:-60px;
}
</style>
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
 
    <section class="w3l-breadcrumb1">
      <div class="container">
        <ul class="breadcrumbs1-custom-path">
          <li><a href="index.php">Home</a></li>
          <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>About us</li>
        </ul>
      </div>
    </section>
 
  <!-- //inner banner -->
  <!-- about section -->
  <section class="w3l-text-6 py-5" id="about">
    <div class="text-6-mian py-md-5">
      <div class="container">
        <div class="row top-cont-grid align-items-center">
          <div class="col-lg-6 left-img pr-lg-4">
            <img src="assets/images/intro.webp" alt="" class="img-responsive img-fluid" />
          </div>
          <div class="col-lg-6 text-6-info mt-lg-0 mt-4">
            <h6>The Brand</h6>
            <h2 class="title-main">About The Brand</span></h2>
                                    <!-- unique store -->

            <p>The Unique Store, founded by Mr. Kunal Vispute. It is a home décor and a lifestyle brand. It was born with a vision to celebrate art, craft and design all over the world and in every possible house. Ethnic home décor, lifestyle and gifting is our forte.
We as a part of this enormous world are very fortunate to experience and enjoy the authenticity and the ethnicity that the whole world provides. Art, Craft and Design are the exact form of expression of the heritage, culture, tradition and lifestyle. The values, morals and principles that we have inherited from our ancestors reflect upon our way of living. Likewise in our homes, every room, space and corner is given the right amount of thought and effort to bring the best out of it. "The Unique Store" is one such venture born from an Indian origin but has a long way to go to experience and showcase the other art forms too that many other land provides. As the name suggests it is an endless journey of art, craft, handicraft and design !!!
</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //about section -->
  <!-- stats -->
  <section class="w3_stats py-5" id="stats">
    <div class="container py-md-4">
      <div class="title-heading-w3 text-center mx-auto">
        <h3 class="title-main">Mission</h3>
        <p class="mt-4 sub-title" style="text-align: justify; text-align-last: left;">We are living in a fast pace world where the demand for newness increases constantly. With this demand of “Newness”, we have somewhere lost the connection with our heritage, our culture and our traditions. Our mission is to bridge this gap between the traditional art and the modern world through our range of ethnic products.</p>
      </div>
    </div>
  </section>
  
  <!-- //stats -->
  <!-- team section -->
  <section class="w3l-teams-1">
    <div class="teams1 py-5">
      <div class="container py-md-4 py-3">
        <div class="teams1-content">
          <div class="title-heading-w3 text-center mx-auto">
            <h3 class="title-main">Design Philosophy</h3>
            <p class="mt-4 sub-title" style="text-align: justify; text-align-last: left;">   Ethnicity and traditionality is what one can find in each of our products. Every product of ours is an equal balance mixture of "Anokha (Unique), Masala (Exciting), Saadgi (Simple) and Vilakshan (eccentric)". We prefer keeping up with not only latest Trends but also our Heritage and Culture. We hope your hunt for ethnicity ends here!!</p>
          </div><br>
		  <div class="title-heading-w3 text-center mx-auto">
            <h3 class="title-main">Craftmanship </h3>
                                    <!-- unique store -->

            <p class="mt-4 sub-title" style="text-align: justify; text-align-last: left;">                                At The Unique Store, we believe that every single handmade product carries an essence of tons of people who have contributed in making that one product. It somewhere has lived a journey from it’s birth to now serving it’s purpose in your life and this makes each and every handcrafted product a unique one with an unique story altogether. We are here to make a new story everyday! What’s your story of Unique Store?</p>
          </div><br>
		  <div class="title-heading-w3 text-center mx-auto">
            <h3 class="title-main">About the Founder</h3>
            <p class="mt-4 sub-title" style="text-align: justify; 
  text-align-last: left;" >          
                          <!-- unique store -->
      
			Mr. Kunal Vispute, the founder of The Unique Store, is a Lifestyle and Accessory Designer. He has experienced and learnt a lot many materials and techniques during her graduation period, which gave her a wider eye for anything and everything art, décor and design. After working as a Footwear Designer for almost 3 years, Prajakta started realizing a void in her creativity. A constant debate of “Having learnt so many new things in her professional journey, then why to restrict to just one thing when you can try it all?” gave her a push to start a venture of her own thus giving birth to “The Unique Store”. He has very artistic and cultural approach to her designs which ultimately meets the aim of the brand. With a quirky design language she can turn even a classy thing quirky and a quirky thing even more quirkier.  Prajakta is trying to inculcate a modern influence in the traditional art and culture which will help the artisans to connect with the modern trends and the people to connect with their roots. With her ethnic approach in day to day utilities, her designs stand out aesthetically and makes it 100% functional.</p>
          </div><br>
		 
		  </section>
        </div>
      </div>
    </div>
  </section>
  <!-- //team setion -->
 
  <!-- newsletter section -->
  <section class="w3l-form-26">
    <div class="form-26-main">
      <div class="container py-md-5">
        <div class="form-inner-cont">
          <div class="title-heading-w3 text-center mx-auto">
                                    <!-- unique store -->

            <h3 class="title-main">Subscribe to us !!!</h3>
          </div>
          <div class="form-right-inf mt-5">
            <form action="#" method="post" class="signin-form">
              <div class="forms-gds">
                <div class="form-input">
                  <input type="email" name="" placeholder="Enter your email address" required />
                </div>
                <div class="btn btn-style btn-warning button-eff-news" style="border-radius: 25px; height: 55px;  width: 150px; text-align:center; font-size:25px; ">
                  <button class="btn">Subscribe</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- newsletter image -->
      <div class="png-img-w3ls">
        <img src="" alt="" class="img-responsive">
      </div>
      <!-- //newsletter image -->
    </div>
  </section>
  <!-- //newsletter section -->
  <!-- footer -->
  <?php include 'footer.php' ?>
  <!-- //copyright -->

  <!-- Js scripts -->
  <!-- common jquery plugin -->
  
</body>
</html>