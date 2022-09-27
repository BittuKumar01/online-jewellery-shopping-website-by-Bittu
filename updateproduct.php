<?php
include_once "adminheader.php";
$productid = $_POST["productid"];
$category = $_POST["category"];
$subcategory = $_POST["subcategory"];
$productname = $_POST["productname"];
$price = $_POST["price"];
$stock = $_POST["stock"];
$discount = $_POST["discount"];
$description = $_POST["description"];
$photo = $_FILES["photo"]["tmp_name"];
$flag = 0;
$path = '';
$error = "";
if ($photo != "") {
    $filename = $_FILES["photo"]["name"];
    $ext = pathinfo(strtolower($filename), PATHINFO_EXTENSION);
    if ($ext != "jpg" and $ext != "png") {
        $error = "Please select jpg or png image only";
        $flag = 1;
//        header("location:showproduct.php?er=4");
    } elseif (round($_FILES["photo"]["size"] / 1024) > 100) {
        $error = "Image size must be less than 100 kb";
        $flag = 2;
//        header("location:showproduct.php?er=3");
    } else {
        $path = "photos/$filename";
        move_uploaded_file($photo, $path);
    }
}
if ($error == "") {
    if ($path == '') {
        $qury = "UPDATE `product` SET `productname`='$productname',`price`='$price',`stock`='$stock',`description`='$description',`subcatid`='$subcategory',`discount`='$discount' WHERE productid ='$productid'";

    } else {
        $qury = "UPDATE `product` SET `productname`='$productname',`price`='$price',`stock`='$stock',`photo`='$path',`description`='$description',`subcatid`='$subcategory',`discount`='$discount' WHERE productid ='$productid'";

    }
    if (mysqli_query($conn, $qury)) {
        header("location:showproduct.php?er=0");
    } else {
        header("location:showproduct.php?er=1");
    }
} else {
//    echo $error;
    if ($flag == 1) {
        header("location:showproduct.php?er=2");
    } elseif ($flag == 2) {
        header("location:showproduct.php?er=3");
    }
}
