<?php
include "cart.php";
session_start();
$productid = $_REQUEST['q'];
if (isset($_SESSION['products'])) {
    $ar = $_SESSION['products'];
    $k = 0;
    foreach ($ar as $item) {
        if ($productid == $item->id) {
            array_splice($ar, $k, 1);
        }
        $k++;
    }
    print_r($ar);
    $_SESSION['products'] = $ar;
     header("Location:viewCart.php");
}