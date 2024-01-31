<style>
    .vef{
         border-radius:80px;
         background-color:#edce77;
    }
</style>


<center>
<div class="vef">
<br>
<center>    <h1 class="text-center" style="font-weight:800;">_________________________</h1></center>    
<center>    <h1 class="text-center" style="font-weight:800;">The UniQue Store</h1></center>
<br><br>


<?php
include 'db.php';
require('config.php');

session_start();

require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{
    $html = "<p>Your payment was successful</p>
             <p>Payment ID: {$_POST['razorpay_payment_id']}</p>";
}
else
{
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
}

echo $html;
?>
<br><br>
<center>    <h1 class="text-center" style="font-weight:800;">_________________________</h1></center>    

</div>
<br><br>
</center>
<div class="thank">
<center>    <h4 class="text-center" style="font-weight:800;">We will Deliver your product as soon as possible.</h4></center>

<center>    <h1 class="text-center" style="font-weight:800;">Thank yOU !!!</h1></center>
<br>
</div>
<div class="hme">
 <center>   <a href="#" style="color:black;  border-radius:19px; padding:13px; margin:18px; background-color:#edcf7b; text-decoration:none; font-size:20px;">Continue your shopping...</a></center>

</div>