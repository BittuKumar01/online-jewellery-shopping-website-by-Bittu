<?php
include "cart.php";
session_start();
include "connection.php";
if (isset($_SESSION["email"])) {
    $email = $_SESSION["email"];

    $user = "select * from signup where email='$email'";
    $user_result = mysqli_query($conn, $user);
    $user_row = mysqli_fetch_array($user_result);
}

$address = $_POST['address'];
$city = $_POST['city'];
$zipcode = $_POST['zipcode'];
$remarks = $_POST['remarks'];
$paymentmethod = $_POST['paymentmethod'];
date_default_timezone_set("Asia/Kolkata");
$ar = array();
$grandTotal = 0;
if (isset($_SESSION['products'])) {
    $ar = $_SESSION['products'];
    foreach ($ar as $item) {
        $discountedPriceTotal = round($item->price - (($item->price * $item->discount) / 100), 2);
        $netpriceTotal = $discountedPriceTotal * $item->qty;
        $grandTotal += $netpriceTotal;
    }
}
$currentDateTime = date('Y-m-d H:i:s');
$sql = "INSERT INTO `bill`(`id`, `grandtotal`, `datetime`, `paymentmethod`, `city`, `zipcode`, `address`, `remarks`,`status`, `trackingid`, `companyname`, `trackingurl`, `trackremarks`, `personreceived`, `returnremarks`, `email`) 
VALUES (null ,'$grandTotal','" . $currentDateTime . "','$paymentmethod','$city','$zipcode','$address','$remarks','pending',null,'','','','','','$email')";
mysqli_query($conn, $sql);
//echo $sql;
$billid = $conn->insert_id;

$msg = "Dear " . $user_row['fullname'] . ",\nThank you for Shopping with us.\n Order No. " . $billid . "\n Order Date/Time " . $currentDateTime . "\n";
foreach ($ar as $item) {
    $discountedPriceTotal = round($item->price - (($item->price * $item->discount) / 100), 2);
    $netpriceTotal = $discountedPriceTotal * $item->qty;
    $s = "INSERT INTO `bill_detail`(`id`, `price`, `discount`, `netprice`, `quantity`, `productid`, `billid`) 
    VALUES (null ,'" . $item->price . "','" . $item->discount . "','" . $discountedPriceTotal . "','" . $item->qty . "','" . $item->id . "','" . $billid . "')";
    mysqli_query($conn, $s);
    $stock = $item->stock - $item->qty;
    $update = "UPDATE `product` SET `stock`='$stock' WHERE `productid`=" . $item->id;
    mysqli_query($conn, $update);

    $msg .= $item->productname . " (" . $discountedPriceTotal . " X " . $item->qty . ") = " . $netpriceTotal . "\n";
}
$msg .= "Total Amount " . $grandTotal;
$ch = curl_init();
$mobile = $user_row['mobile'];

$message = urlencode($msg);
curl_setopt($ch, CURLOPT_URL, "http://server1.vmm.education/VMMCloudMessaging/AWS_SMS_Sender?");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
    "username=JulyBatchPHP2019&password=PHFDUD2Y&message=" . $message . "&phone_numbers=" . $mobile);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//print_r($ch);
$server_output = curl_exec($ch);

curl_close($ch);
$_SESSION['products'] = null;
unset($_SESSION['products']);
if ($paymentmethod == "cash") {
    header("Location:thanks.php?q=" . $billid);
} else {
    echo $billid;
}
?>