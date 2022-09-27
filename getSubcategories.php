<?php
include "connection.php";
$categoryname = $_REQUEST['q'];
$qury = "select * from subcategory where category='$categoryname'";
$result = mysqli_query($conn, $qury);
if (mysqli_num_rows($result) > 0) {
    ?>
    <table class="table">
        <thead>
        <tr>
            <th>Sr No.</th>
            <th>Sub Category Name</th>
            <th>Sub Category Description</th>
            <th>Category Name</th>
            <th colspan="2">Controls</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $k = 0;

        while ($category = mysqli_fetch_array($result)) {
            $k++;
            ?>
            <tr>
                <td><?php echo $k; ?></td>
                <td><?php echo $category[1]; ?></td>
                <td><?php echo $category[2]; ?></td>
                <td><?php echo $category[3]; ?></td>
                <td><a onclick="return confirm('Are you Sure you want to Delete?')"
                       href="deletesubcategory.php?subcatid=<?php echo $category[0]; ?>"><i class="fa fa-trash"></i></a>
                </td>
                <td><a href="editsubcategory.php?subcatid=<?php echo $category[0]; ?>"><i class="fa fa-edit"></i></a>
                </td>
            </tr>
            <?php

        }
        ?>
        </tbody>
    </table>
    <?php
} else {
    ?>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="alert alert-danger">No Data Found <span class="close" data-dismiss="alert">&times;</span></div>
        </div>
    </div>
    <?php
}