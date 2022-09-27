<?php
include_once 'adminheader.php';
include_once 'connection.php';

$photo = $_FILES["photo"]["tmp_name"];
$productid = $_POST["productid"];
$caption = $_POST["caption"];
$path = '';
$error = '';
if ($photo != "") {
    $filename = $_FILES["photo"]["name"];
    $ext = pathinfo(strtolower($filename), PATHINFO_EXTENSION);
    if (round($_FILES["photo"]["size"] / 1024) > 500) {
        $error = "Image size must be less than 100 kb";
        header("location:showproduct.php?er=2");
    } else {
        $path = "photos/$filename";
        move_uploaded_file($photo, $path);
    }
}

if ($error == "") {
    $s = "select * from product_photo where caption='$caption' and productid='$productid'";
    $result = mysqli_query($conn, $s);
    if (mysqli_num_rows($result) > 0) {
        header("Location:showproduct.php?er=3");
    } else {
        $qury = "INSERT INTO `product_photo`(`id`, `photo`, `caption`, `productid`) VALUES (null ,'$path','$caption','$productid')";
//        echo $s;
        if (mysqli_query($conn, $qury)) {
            header("location:showproduct.php?er=0");
        } else {
            header("location:showproduct.php?er=1");
        }
    }
} else {
    echo $error;
    header("location:showproduct.php?er=$error");
}
