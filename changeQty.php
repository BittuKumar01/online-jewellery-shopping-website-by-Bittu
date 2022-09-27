<?php

include "cart.php";
session_start();

include "connection.php";
$qty = $_REQUEST['qty'];
$productid = $_REQUEST['q'];
$s = "SELECT * FROM `product` where productid='$productid'";
$result = mysqli_query($conn, $s);
$row = mysqli_fetch_array($result);
$ar = array();
if (isset($_SESSION['products'])) {
    $ar = $_SESSION['products'];
    $flag = 0;
    $grandTotal = 0;
    $netprice = 0;
    foreach ($ar as $item) {
        if ($productid == $item->id) {
            $item->qty = $qty;
            $discountedPrice = round($item->price - (($item->price * $item->discount) / 100), 2);
            $netprice = $discountedPrice * $item->qty;
            $flag = 1;
            break;
        }
    }
    foreach ($ar as $item) {
        $discountedPriceTotal = round($item->price - (($item->price * $item->discount) / 100), 2);
        $netpriceTotal = $discountedPriceTotal * $item->qty;
        $grandTotal += $netpriceTotal;
    }
    $newar = array("qty" => $qty, "netPrice" => round($netprice, 2), "grandTotal" => round($grandTotal, 2));
    echo json_encode($newar);
}