<?php
include 'adminheader.php';
include_once 'connection.php';
session_start();

$email = $_POST["email"];
$password = $_POST["password"];

$qury = "SELECT * FROM `signup` WHERE email ='$email' and password = '$password'";
$result = mysqli_query($conn, $qury);

if (mysqli_num_rows($result) > 0) {
    $_SESSION["email"] = $email;
    header("location:userhome.php");
} else {
    header("location:userloginpage.php?er=1");
}