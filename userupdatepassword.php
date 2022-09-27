<?php
include_once 'userheader.php';
@session_start();
$q2 = "";
$email = $_SESSION["email"];
$oldpassword = $_POST["oldpassword"];
$newpassword = $_POST["newpassword"];
$newconpassword = $_POST["newconpassword"];

$qury = "select * from signup where email ='$email' and password ='$oldpassword'";
$result = mysqli_query($conn, $qury);

if (mysqli_num_rows($result) > 0) {
    $q2 = "update signup set password ='$newpassword' where email='$email'";
    echo $q2;
    if (mysqli_query($conn, $q2)) {
        header("location:userloginpage.php?er=1");
    } else {
        header("location:userchangepassword.php?er=2");
    }
}
else{
    header("location:userchangepassword.php?er=3");

}