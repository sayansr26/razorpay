<?php


$paymentid = $_POST['razorpay_payment_id'];
$amount = $_POST['amount'];
$username = $_POST['username'];
$transectionid = $_POST['transectionid'];


echo "$paymentid <br> $amount <br> $username <br> $transectionid";
