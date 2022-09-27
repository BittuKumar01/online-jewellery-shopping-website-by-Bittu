<?php
$ch = curl_init();
$mobile = "6283069142";

$message = urlencode("hello");
curl_setopt($ch, CURLOPT_URL, "http://server1.vmm.education/VMMCloudMessaging/AWS_SMS_Sender?");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
    "username=JulyBatchPHP2019&password=PHFDUD2Y&message=" . $message . "&phone_numbers=" . $mobile);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//print_r($ch);
$server_output = curl_exec($ch);

curl_close($ch);