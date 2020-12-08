<?php


require_once('config.php');
require_once('razorpay-php/Razorpay.php');


use Razorpay\Api\Api;


$keyId = 'rzp_test_n3hzno9GxC7dTy';
$secretKey = 'dG2RVfWFPxx9Tn49mZR550kB';
$api = new Api($keyId, $secretKey);


$amount = $_POST['amount'];
$username = $_POST['username'];
$transectioId = $_POST['transectionid'];
$razorpayAmount = $amount * 100;

$order = $api->order->create(array(
    'receipt' => $transectioId,
    'amount' => $razorpayAmount,
    'payment_capture' => 1,
    'currency' => 'INR'
));

?>

<meta name="viewport" content="width=device-width">


<style>
    .razorpay-payment-button {
        display: none;
    }
</style>

<form action="success.php" method="POST">
    <input type="hidden" name="amount" value="<?php echo $amount; ?>">
    <input type="hidden" name="username" value="<?php echo $username; ?>">
    <input type="hidden" name="transectionid" value="<?php echo $transectioId; ?>">
    <script src="https://checkout.razorpay.com/v1/checkout.js" data-key="<?php echo $keyId; ?>" data-amount="<?php echo $order->amount ?>" data-currency="INR" data-order_id="<?php echo $order->id ?>" data-buttontext="Pay with Razorpay" data-name="Acme Corp" data-description="A Wild Sheep Chase is the third novel by Japanese author Haruki Murakami" data-image="https://picsum.photos/500" data-prefill.name="Gaurav Kumar" data-prefill.email="gaurav.kumar@example.com" data-theme.color="#F37254">
    </script>
    <input type="hidden" custom="Hidden Element" name="hidden">
</form>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('.razorpay-payment-button').click();
    });
</script>