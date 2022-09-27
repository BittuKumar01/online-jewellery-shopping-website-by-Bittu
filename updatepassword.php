<?php
include 'adminheader.php';
include_once 'connection.php';
@session_start();
$q2 = "";
$username = $_SESSION["username"];
$oldpassword = $_POST["oldpassword"];
$newpassword = $_POST["newpassword"];
$newconpassword = $_POST["newconpassword"];

$qury = "select * from admin where username ='$username' and password ='$oldpassword'";
$result = mysqli_query($conn, $qury);
//echo $result;
if (mysqli_num_rows($result) > 0) {
    $q2 = "update admin set password ='$newpassword' where username='$username'";
    echo $q2;
    if (mysqli_query($conn, $q2)) {
        header("location:loginpage.php?er=1");
    } else {
        header("location:admin_changepassword.php?er=2");
    }
}
else{
    header("location:admin_changepassword.php?er=3");

}