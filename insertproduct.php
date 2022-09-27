<?php
include_once "adminheader.php";
$category = $_POST["category"];
$subcategory = $_POST["subcategory"];
$productname = $_POST["productname"];
$price = $_POST["price"];
$stock = $_POST["stock"];
$description = $_POST["description"];
$photo = $_FILES["photo"]["tmp_name"];
$discount = $_POST["discount"];
$path = '';
$error = "";
if ($photo != "") {
    $filename = $_FILES["photo"]["name"];
    $ext = pathinfo(strtolower($filename), PATHINFO_EXTENSION);
    if (round($_FILES["photo"]["size"] / 1024) > 500) {
        $error = "Image size must be less than 100 kb";
        header("location:addproduct.php?er=2");
    } else {
        $path = "photos/$filename";
        move_uploaded_file($photo, $path);
    }
}
if ($error == "") {
    $s = "select * from product where productname='$productname' and subcatid='$subcategory'";
    $result = mysqli_query($conn, $s);
    if (mysqli_num_rows($result) > 0) {
        header("Location:addproduct.php?er=3");
    } else {
        $qury = "INSERT INTO `product`(`productid`, `productname`, `price`, `stock`,`discount`, `photo`, `description`, `subcatid`) VALUES (null,'$productname','$price','$stock','$discount','$path','$description','$subcategory')";
        if (mysqli_query($conn, $qury)) {
            header("location:addproduct.php?er=0");
        } else {
            header("location:addproduct.php?er=1");
        }
    }
} else {
    echo $error;
    header("location:addproduct.php?er=$error");
}
