
<?php
include 'db.php';
error_reporting(null);
session_start();
$uid=$_SESSION['uid'];

?>
 <h3 class="text-center" style="font-weight:800;">CONFIRM YOUR DETAILS</h3>
                        <table border="1" style="margin-left:500px;">
                            <tbody>
						<?php
                            $sqluser=mysqli_query($conn,"select * from user where uid='$uid'");
						$rowuser=mysqli_fetch_array($sqluser)
						?>
                            <tr>

                                <th style="padding:5px;">Name</th>
                                <td style="padding:5px;"><?php echo $rowuser['name'];?></td>

                            </tr>
                            <tr>

                                <th style="padding:5px;">Mobile Number</th>
                                <td style="padding:5px;"><?php echo $rowuser['contact_no'];?></td>

                            </tr>
                            <tr>
					
                                <th style="padding:5px;">Email</th>
                                <td style="padding:5px;"><?php echo $rowuser['email'];?></td>

                            </tr>
                 <?php
                           
						
							$sql=mysqli_query($conn,"select * from temp as tp LEFT JOIN product as pt ON tp.pid=pt.pid where uid='$uid' and status='0' ");
while($row=mysqli_fetch_array($sql)) {
	
	$pid=$row['pid'];
	$uid=$row['uid'];
	$price=$row['price'];
	$quantity=$row['quantity'];
	$gifting=$row['gifting'];
	
	$total_amount=$price * $quantity;
	$grand +=$total_amount ;
	
	$sql2=mysqli_query($conn,"select * from temp where uid='$uid' and gifting='yes' and status='0'");
		$prod=mysqli_num_rows($sql2);
		$total_amount=$grand +  $prod * 100;
}
                     
?>
                            <tr>
                                <th style="padding:5px;">Payable Amount</th>
                                <td style="padding:5px;"><?php echo $total_amount?></td>

                            </tr>
                        </table><br><br>
						

                    
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->

	
<?php
require('config.php');
require('razorpay-php/Razorpay.php');


// Create the Razorpay Order

use Razorpay\Api\Api;

$api = new Api($keyId, $keySecret);

//
// We create an razorpay order using orders api
// Docs: https://docs.razorpay.com/docs/orders
//

$orderData = [
    'receipt'         => 3456,
    'amount'          => $total_amount* 100, // 2000 rupees in paise
    'currency'        => 'INR',
    'payment_capture' => 1 // auto capture
];

$razorpayOrder = $api->order->create($orderData);

$razorpayOrderId = $razorpayOrder['id'];

$_SESSION['razorpay_order_id'] = $razorpayOrderId;

$displayAmount = $amount = $orderData['amount'];

if ($displayCurrency !== 'INR')
{
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
    $exchange = json_decode(file_get_contents($url), true);

    $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}



$data = [
    "key"               => $keyId,
    "amount"            => $amount,
    "name"              => "Anant-The Limitless Art",
    "description"       => "Tron Legacy",
    "image"             => "https://www.anantthelimitlessart.com/assets/images/logo.png",
    "prefill"           => [
    "name"              => $rowuser['name'],
    "email"             => $rowuser['email'],
    "contact"           => $rowuser['contact_no'],
    ],
    "notes"             => [
    "address"           => "Hello World",
    "merchant_order_id" => "12312321",
    ],
    "theme"             => [
    "color"             => "#F37254"
    ],
    "order_id"          => $razorpayOrderId,
];
		
if ($displayCurrency !== 'INR')
{
    $data['display_currency']  = $displayCurrency;
    $data['display_amount']    = $displayAmount;
}

$json = json_encode($data);
?>

<!--  The entire list of Checkout fields is available at
 https://docs.razorpay.com/docs/checkout-form#checkout-fields -->

<form action="verify.php" method="POST">
  <script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $data['key']?>"
    data-amount="<?php echo $data['amount']?>"
    data-currency="INR"
    data-name="<?php echo $data['name']?>"
    data-image="<?php echo $data['image']?>"
    data-description="<?php echo $data['description']?>"
    data-prefill.name="<?php echo $data['prefill']['name']?>"
    data-prefill.email="<?php echo $data['prefill']['email']?>"
    data-prefill.contact="<?php echo $data['prefill']['contact']?>"
    data-notes.shopping_order_id="3456"
    data-order_id="<?php echo $data['order_id']?>"
    <?php if ($displayCurrency !== 'INR') { ?> data-display_amount="<?php echo $data['display_amount']?>" <?php } ?>
    <?php if ($displayCurrency !== 'INR') { ?> data-display_currency="<?php echo $data['display_currency']?>" <?php } ?>
  >
  </script>
  <!-- Any extra fields to be submitted with the form but not sent to Razorpay -->
  <input type="hidden" name="shopping_order_id" value="3456">
</form>




