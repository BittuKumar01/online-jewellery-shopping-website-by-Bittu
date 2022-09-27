<?php
include_once 'cart.php';

include_once 'connection.php';
include_once 'userheader.php';
if (isset($_SESSION["email"])) {
    $email = $_SESSION["email"];

    $user = "select * from signup where email='$email'";
    $user_result = mysqli_query($conn, $user);
    $user_row = mysqli_fetch_array($user_result);
}

date_default_timezone_set("Asia/Kolkata");
$billid = $_POST["billid"];
$qty = $_POST["qty"];
$remarks = $_POST["remarks"];
$currentDateTime = date('Y-m-d H:i:s');

//$productid = "select quantity,productid from bill_detail where productid ='$billid'";
//$billdetailresult = mysqli_query($conn, $productid);
//$billdetailrow = mysqli_fetch_array($billdetailresult);

$update = "UPDATE `bill` SET status='cancelled', returnremarks = '$remarks' WHERE `id`='$billid'";
$msg = "Dear " . $user_row["fullname"] . ",\nYour Order is Cancelled with following reason .\n " . $remarks . "\n Date/Time " . $currentDateTime;


//foreach ($ar as $billdetailrow) {
//    $productsql ="select * from product where productid ='$ar[1]'";
//    $productresult = mysqli_query($conn,$productsql);
//    $productrow =mysqli_fetch_array($productresult);
//    $stock = $productrow["stock"] + $qty;
//    $updatestock = "UPDATE `product` SET `stock`='$stock' WHERE `productid`= '$billdetailrow[1];'";
//
//    if (mysqli_query($conn, $updatestock))
//    {
//        echo 'update success';
//    }
//}

if (mysqli_query($conn, $update)) {
    $ch = curl_init();
    $mobile = $user_row["mobile"];

    $message = urlencode($msg);
    curl_setopt($ch, CURLOPT_URL, "http://server1.vmm.education/VMMCloudMessaging/AWS_SMS_Sender?");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,
        "username=JulyBatchPHP2019&password=PHFDUD2Y&message=" . $message . "&phone_numbers=" . $mobile);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    print_r($ch);
    $server_output = curl_exec($ch);

    curl_close($ch);
    echo "Update Success";

    header("location:myorder.php");
} else {
    echo "Update Failed";
    header("location:myorder.php");
}

