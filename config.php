<?php


$dbn = "mysql:host=localhost;dbname=razorpay";
$user = "admin";
$pass = "1511";

$connection = new PDO($dbn, $user, $pass);

try {
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Success";
} catch (PDOException $e) {
    echo "Failed : " . $e->getMessage();
}
