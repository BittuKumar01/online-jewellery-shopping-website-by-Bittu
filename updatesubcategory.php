<?php
include 'connection.php';
include 'headerfiles.html';
$subcatid = $_POST["subcatid"];
$categoryname = $_POST["categoryname"];
$subcategoryname = $_POST["subcategoryname"];
$subcategorydescription = $_POST["subcategorydescription"];

$qury = "UPDATE `subcategory` SET `subcategoryname`='$subcategoryname',`description`='$subcategorydescription' , `category`='$categoryname' WHERE `subcategoryid`='$subcatid'";
//echo $qury;
if (mysqli_query($conn, $qury)) {
    echo "Update Success";
    header("location:showsubcategory.php");
} else {
    echo "Update Failed";
    header("location:showsubcategory.php");
}
