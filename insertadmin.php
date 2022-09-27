<?php
include_once 'connection.php';

$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$connpassword = $_POST["conpassword"];
$mobile = $_POST["mobile"];
$fullname = $_POST["fullname"];
$qury = "select * from admin where username='$username'";
$result = mysqli_query($conn, $qury);
if (mysqli_num_rows($result) > 0) {
    header("Location:add_admin.php?er=0");
} else {
    if ($password == $connpassword) {
        $qury = "INSERT INTO `admin`(`username`, `email`, `password`, `mobile`, `fullname`) VALUES ('$username','$email','$password','$mobile','$fullname')";
        if (mysqli_query($conn, $qury)) {
            echo "Insert Success";
            header("Location:add_admin.php?er=1");
        } else {
            echo "Insert Failed";
            header("Location:add_admin.php?er=2");
        }
    } else {
        header("location:add_admin.php?msg=Password and confirm password could not match");
    }
}