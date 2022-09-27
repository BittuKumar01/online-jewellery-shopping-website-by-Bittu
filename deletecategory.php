<?php
include 'adminheader.php';
include_once 'connection.php';

$catname = $_REQUEST["catname"];
$qury = "delete from category where categoryname ='$catname'";
if (mysqli_query($conn, $qury)) {
    header("location:showcategory.php");
} else {
    header("location:showcategory.php");
}
