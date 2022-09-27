<?php
include "connection.php";
$categoryname = $_REQUEST['q'];
$qury = "select subcategoryname from subcategory where category='$categoryname'";
$result = mysqli_query($conn, $qury);
if (mysqli_num_rows($result) > 0) {
    ?>
    <?php

    while ($category = mysqli_fetch_array($result)) {
        ?>
        <option value="<?php $category[0]; ?>"><?php $category[0]; ?></option>

        <?php
    }
    ?>
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


