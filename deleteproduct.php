<?php
include 'adminheader.php';

$productid = $_REQUEST["productid"];
$qury = "delete from product where productid ='$productid'";
if (mysqli_query($conn, $qury)) {
    header("location:showproduct.php");
} else {
    header("location:showproduct.php");
}
