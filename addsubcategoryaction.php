<?php

include 'adminheader.php';
$categoryname = $_POST["categoryname"];
$subcategoryname = $_POST["subcategoryname"];
$subcategorydescription = $_POST["subcategorydescription"];
$qury = "select * from subcategory where category='$categoryname' and subcategoryname='$subcategoryname'";
$result = mysqli_query($conn, $qury);
if (mysqli_num_rows($result) > 0) {
    header("Location:addsubcategory.php?er=0");
} else {
    $s = "INSERT INTO `subcategory`(`subcategoryid`, `subcategoryname`, `description`, `category`) VALUES (null ,'$subcategoryname','$subcategorydescription','$categoryname')";
    echo $s;
    if (mysqli_query($conn, $s)) {
        echo "Insert Success";
        header("Location:addsubcategory.php?er=1");
    } else {
        echo "Insert Failed";
        header("Location:addsubcategory.php?er=2");
    }
}


