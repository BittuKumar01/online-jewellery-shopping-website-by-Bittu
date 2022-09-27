<?php
include_once 'connection.php';

$email = $_POST["email"];
$password = $_POST["password"];
$connpassword = $_POST["conpassword"];
$mobile = $_POST["mobile"];
$fullname = $_POST["fullname"];

if ($password == $connpassword) {
    $qury = "INSERT INTO `signup`(`email`, `password`, `fullname`, `mobile`) VALUES ('$email','$password','$fullname','$mobile')";
    if (mysqli_query($conn, $qury)) {
        echo "Insert Success";
        header("location:userloginpage.php");
    } else {
        echo "Insert Failed";
        header("location:signup.php");
    }
} else {
    header("location:signup.php?msg=Password and confirm password could not match");
}