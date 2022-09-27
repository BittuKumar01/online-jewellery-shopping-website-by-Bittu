<?php
include 'adminheader.php';
include_once 'connection.php';

$username = $_POST["username"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$fullname = $_POST["fullname"];

$qury = "UPDATE `admin` SET `email`='$email',`mobile`='$mobile',`fullname`='$fullname' WHERE `username`='$username'";
echo $qury;
if (mysqli_query($conn, $qury)) {
    echo "Update Success";
    header("location:show_admin.php");
} else {
    echo "Update Failed";
    header("location:show_admin.php");
}
