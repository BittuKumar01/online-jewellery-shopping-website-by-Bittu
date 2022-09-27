<?php
include 'adminheader.php';

$subcatid = $_REQUEST["subcatid"];
$qury = "delete from subcategory where subcategoryid ='$subcatid'";
if (mysqli_query($conn, $qury)) {
    header("location:showsubcategory.php");
} else {
    header("location:showsubcategory.php");
}
