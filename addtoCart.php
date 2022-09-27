<?php
include "cart.php";
session_start();

include "connection.php";
$qty = $_REQUEST['qty'];
if ($qty == 'index') {
    $qtyval = 1;
} else {
    $qtyval = $qty;
}
$productid = $_REQUEST['q'];
$s = "SELECT * FROM `product` where productid='$productid'";
$result = mysqli_query($conn, $s);
$row = mysqli_fetch_array($result);
$ar = array();
if (isset($_SESSION['products'])) {
    $ar = $_SESSION['products'];
    $flag = 0;
    foreach ($ar as $item) {
        if ($productid == $item->id) {
            if ($qty == 'index') {
                $item->qty += 1;
            } else {
                $item->qty = $qtyval;
            }
            $flag = 1;
            break;
        }
    }
    if ($flag == 0) {
        $ar[count($ar)] = new cart($productid, $row['productname'], $row['price'], $row['discount'], $row['stock'], $row['photo'], $qtyval, $row['subcatid']);
    }
    $_SESSION['products'] = $ar;
} else {
    $ar[0] = new cart($productid, $row['productname'], $row['price'], $row['discount'], $row['stock'], $row['photo'], $qtyval, $row['subcatid']);
    $_SESSION['products'] = $ar;
}
echo count($_SESSION['products']);
