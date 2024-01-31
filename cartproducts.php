<?php 
error_reporting(E_ERROR);
session_start();
$uid=$_SESSION['uid'];
$pid=$_GET['pid'];
$temp_id=$_GET['temp_id'];
include 'db.php'; 

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>The Unique Store</title>
  <!-- google-fonts -->
  <link
    href="//fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,400;1,600;1,700&display=swap"
    rel="stylesheet">
  <!-- //google-fonts -->
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  
<style>
 #number{
	text-align:center;
}
.button{
	width:8%;
	font-size:15px;
}
.button1{
	width:15%;
	color:black;
}
.form-group label {
  position: relative;
  cursor: pointer;
  font-size:18px;
}

.form-group label:before {
  content:'';
  -webkit-appearance: none;
  background-color: transparent;
  border: 2px solid black;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05), inset 0px -15px 10px -12px rgba(0, 0, 0, 0.05);
  padding: 10px;
  display: inline-block;
  position: relative;
  vertical-align: middle;
  cursor: pointer;
  margin-right: 8px;
  
}

.form-group input:checked + label:after {
  content: '';
  display: block;
  position: absolute;
  top: 2px;
  left: 9px;
  width: 6px;
  height: 14px;
  border: solid black;
  border-width: 0 2px 2px 0;
  transform: rotate(45deg);
}
@media screen and (max-width: 600px) {
	
	table{
		margin-right:90px;
	}
	.button1{
		width:90px;
	}
	.w3l-index{
		 margin-top:90%;
	}
		margin-left:-500px;
	}
}


.checkbox {
  padding-left: 20px;
}

.checkbox label {
  display: inline-block;
  vertical-align: middle;
  position: relative;
  padding-left: 5px;
}

.checkbox label::before {
  content: "";
  display: inline-block;
  position: absolute;
  width: 17px;
  height: 17px;
  left: 0;
  margin-left: -20px;
  border: 1px solid #cccccc;
  border-radius: 3px;
  background-color: #fff;
  -webkit-transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
  -o-transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
  transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
}

.checkbox label::after {
  display: inline-block;
  position: absolute;
  width: 16px;
  height: 16px;
  left: 0;
  top: 0;
  margin-left: -20px;
  padding-left: 3px;
  padding-top: 1px;
  font-size: 11px;
  color: #555555;
}

.checkbox input[type="checkbox"] {
  opacity: 0;
  z-index: 1;
}


.checkbox input[type="checkbox"]:checked + label::after {
  font-family: 'FontAwesome';
  content: "\f00c";
}

.checkbox input[type="checkbox"]:disabled + label {
  opacity: 0.65;
}

.checkbox input[type="checkbox"]:disabled + label::before {
  background-color: #eeeeee;
  cursor: not-allowed;
}

.checkbox.checkbox-circle label::before {
  border-radius: 50%;
}

.checkbox.checkbox-inline {
  margin-top: 0;
}
.checkbox-primary input[type="checkbox"]:checked + label::before {
  background-color: #428bca;
  border-color: #428bca;
}

.checkbox-primary input[type="checkbox"]:checked + label::after {
  color: #fff;
}

.checkbox input[type="checkbox"]:checked + label::before {
  background-color: #428bca;
  border-color: #428bca;
}

.checkbox input[type="checkbox"]:checked + label::after {
  color: #fff;
}

.checkbox-success input[type="checkbox"]:checked + label::before {
  background-color: #428bca;
  border-color: #428bca;
}

.checkbox-success input[type="checkbox"]:checked + label::after {
  color: #fff;
}
@media screen and (max-width: 600px) {
	#checkout {
		margin-left:-830px;
		
	}
}

  </style>
  
</head>

<body>
  <!--header-->
 <?php include 'nav.php';?>
 
 <div class="inner-banner">
    <section class="w3l-breadcrumb3">
      <div class="container">
        <ul class="breadcrumbs3-custom-path">
          <li><a href="index.php">Home</a></li>
		  <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Cart</li>
        </ul>
      </div>
    </section>
  </div>
  
  <section class="w3l-index py-5">
        <div class="container py-md-4 py-3">
            <br><br>
				<?php 
				if($count==0)
				{
				echo "<h2><center><b>Your cart is empty</b><center></h2>";
				}
				else{
					
				$i=1;
				
						$sql=mysqli_query($conn,"select * from temp as tp LEFT JOIN product as pt ON tp.pid=pt.pid where uid='$uid' and status='0'");
						while($row=mysqli_fetch_array($sql))  
						{ 
							$a=explode(",",$row['customization']);
						?>
						
            <div class="col-lg-6 left-img pr-lg-4">
            <center><img src="assets/images/<?php echo $row['image1']; ?>" width="200" alt="<?php echo $row['image1']; ?>" height="200"></center>
          </div>
            <div class="col-lg-6 text-6-info mt-lg-0 mt-4">
            <p><?php echo $row['pname'];?> 
			</p>
			<p>Colour:<?php echo $row['colour']; ?></p>
			
		<input type="hidden" name="pid" value="<?php echo $row['pid'];?>">
			
			<a href="carti.php?tid=<?php echo $row['temp_id'];?>&opn=minus"><input type="button"  value="-" class="button"/></a>
					<input type="text" name="quantity" value="<?php echo $row['quantity'];?>" maxlength="2" max="10" size="1" id="number" />
					<a href="carti.php?tid=<?php echo $row['temp_id'];?>&opn=plus">
					<input type="button" value="+" class="button"/></a>
					
					<?php
					$total_price += ($row["price"]*$row["quantity"]);
					?>
					
		    <h4><b>&#8377;<?php echo $row['quantity'] * $row['price'];?></b></h4>
			
			<div class="container">
 
    <div class="row">
      <div class="col-md-4">
        <fieldset>
        <p><b>Customization checklist:</b></p>
		
		<?php  $b=implode(" ",$a);
				echo $b;
				
		  ?>
		  
          <div class="checkbox">
           <input id="checkbox1" type="checkbox" name="customization[]"  value="design" <?php if($b=='design') { echo "checked"; } ?>>
            <label for="checkbox1" style="color:black; font-size:17px;">
             Design</label>
          </div>
		 
		  
         <div class="checkbox checkbox-primary">
            <input id="checkbox2" type="checkbox" name="customization[]" value="color" <?php if($b=='color') { echo "checked"; } ?>>
           <label for="checkbox2" style="color:black; font-size:17px;">
            Color</label>
          </div>
		  
		  
          <div class="checkbox checkbox-success">
            <input id="checkbox3" type="checkbox" name="customization[]" value="personalized upper design" <?php if($b=='personalized upper design') { echo "checked"; } ?>>
           <label for="checkbox3" style="color:black; font-size:17px;">
           Personalized upper design</label>
          </div>
        </fieldset>
      </div>
    </div>
  </div>
			
			<div class="form-group">
		    <a href="carti.php?tid=<?php echo $row['temp_id'];?>&opn=check">
		   <input type="checkbox" id="html" name="gifting" <?php if($row['gifting']=='yes')  { echo "checked"; } ?>  value="yes"/>
		   
			    <label for="html">The product contains gifting </label>
			     </div>
				 
					<a href="remove.php?temp_id=<?php echo $row['temp_id'];?>" onclick="myFunction()"><input type="button" value="Remove" class="button1"/></i></a>
					<hr style="border:1px solid black; ">
			</div>
			<?php } ?>
			
			<?php 
			/*if(empty($temp_id)) {
				echo "<h2><center>Your cart is empty<center></h2>";
			
			} else {*/
				?>
	<div class="card-body cr">
      <table align="right" style="width:40%">
  
		<th><h3>Price Details:</h3></th>
		<tr>
		<th><h4>Price</h4></th>
		<td style="font-size:17px;">&#8377;<?php echo $total_price; ?></td>
		</tr>
		<tr>
		<th><h4>Gifting:</h4></th>
	 
		<?php
		$sql=mysqli_query($conn,"select * from temp where gifting='yes' and uid='$uid' and status='0'");
		$prod=mysqli_num_rows($sql);
		$total=$total_price +  $prod * 100;
		?>
		<td style="font-size:17px;">&#8377;<?php echo $prod * 100; ?></td>
		</tr>
		<tr>
		<th><h4>Delivery:</h4></th>
		<td style="font-size:17px;">Free</td>
		</tr>
 
		<tr>
		<th><h4>Total Price:</h4></th>
		<td><h4>&#8377;<?php echo $total;?></h4></td>
		</tr>
 
	</table>
	 <br><br>
			<a href="checkout.php" id="checkout"><input type="button" value="Proceed To Checkout" class="btn btn-warning btn-style" style="margin-left:900px;margin-top:50px; height:50px; font-size:16px;"/></i></a>
			<?php } ?>
	 </div>
			
				</div>
    </section>
			<div class="clearfix"> </div>
		</div>
	</div>
		  
 <script>
function myFunction() {
 confirm("Do you really want to remove");
}
</script>

 <?php include 'footer.php'; ?>
    <!-- //copyright -->

    <!-- Js scripts -->
    <!-- common jquery plugin -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->
    <!-- theme switch js (light and dark)-->
    <script src="assets/js/theme-change.js"></script>
	
<script>
function incrementValue()
{
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    if(value<100){
        value++;
            document.getElementById('number').value = value;
    }
}
function decrementValue()
{
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    if(value>1){
        value--;
            document.getElementById('number').value = value;
    }

}
</script>
	
    <script>
        function autoType(elementClass, typingSpeed) {
            var thhis = $(elementClass);
            thhis.css({
                "position": "relative",
                "display": "inline-block"
            });
            thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
            thhis = thhis.find(".text-js");
            var text = thhis.text().trim().split('');
            var amntOfChars = text.length;
            var newString = "";
            thhis.text("|");
            setTimeout(function () {
                thhis.css("opacity", 1);
                thhis.prev().removeAttr("style");
                thhis.text("");
                for (var i = 0; i < amntOfChars; i++) {
                    (function (i, char) {
                        setTimeout(function () {
                            newString += char;
                            thhis.text(newString);
                        }, i * typingSpeed);
                    })(i + 1, text[i]);
                }
            }, 1500);
        }

        $(document).ready(function () {
            // Now to start autoTyping just call the autoType function with the 
            // class of outer div
            // The second paramter is the speed between each letter is typed.   
            autoType(".type-js", 200);
        });
    </script>
    <!-- //theme switch js (light and dark)-->
    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->
    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->
    <!--bootstrap-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap-->
    <!-- //Js scripts -->

</body>
</html>