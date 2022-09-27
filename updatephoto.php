<?php

include_once 'adminheader.php';
include_once 'connection.php';

$photo = $_FILES["photo"]["tmp_name"];
$productid = $_POST["productid"];
$photoid = $_POST["photoid"];
$caption = $_POST["caption"];
$path = '';
$error = '';
if ($photo != "") {
    $filename = $_FILES["photo"]["name"];
    $ext = pathinfo(strtolower($filename), PATHINFO_EXTENSION);
    if (round($_FILES["photo"]["size"] / 1024) > 500) {
        $error = "Image size must be less than 100 kb";
        header("location:showphoto.php?er=2");
    } else {
        $path = "photos/$filename";
        move_uploaded_file($photo, $path);
    }
}

if ($error == "") {
    if ($path == '') {
        $qury = "UPDATE `product_photo` SET `caption`='$caption',`productid`='$productid' WHERE id='$photoid'";

    } else {
        $qury = "UPDATE `product_photo` SET `photo`='$path',`caption`='$caption',`productid`='$productid' WHERE id='$photoid'";

    }
    if (mysqli_query($conn, $qury)) {
        header("location:showphoto.php?productid=$productid");
    } else {
        header("location:showphoto.php?productid=$productid");
    }
} else {
//    echo $error;
    if ($flag == 1) {
        header("location:showphoto.php?productid=$productid");
    } elseif ($flag == 2) {
        header("location:showphoto.php?productid=$productid");
    }
}
