<?php
include 'adminheader.php';

$photoid = $_REQUEST["photoid"];
$productid = $_REQUEST["productid"];
$qury = "delete from product_photo where id ='$photoid'";
if (mysqli_query($conn, $qury)) {
    header("location:showphoto.php?productid=$productid");
} else {
    header("location:showphoto.php?productid=$productid");
}
