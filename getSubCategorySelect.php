<?php
include "connection.php";
$categoryname = $_REQUEST['q'];
?>
<select name="subcategory" class="input-field" id="subcategory" onchange="show_product(this.value)">
    <option value="">Select Sub Category</option>

    <?php

    $qury = "select subcategoryid,subcategoryname from subcategory where category='$categoryname'";
    $result = mysqli_query($conn, $qury);
    if (mysqli_num_rows($result) > 0) {
        ?>
        <?php
        while ($category = mysqli_fetch_array($result)) {

            ?>
            <option value="<?php echo $category[0]; ?>"><?php echo $category[1]; ?></option>
            <?php
        }
        ?>
        <?php
    }
    ?>
</select>