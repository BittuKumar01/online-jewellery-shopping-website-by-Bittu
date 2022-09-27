<?php
include 'adminheader.php';
include_once 'connection.php';

$username = $_REQUEST["username"];
$qury = "delete from admin where username ='$username'";
if (mysqli_query($conn,$qury))
{
    header("location:show_admin.php");
}
else{
    header("location:show_admin.php");
}
