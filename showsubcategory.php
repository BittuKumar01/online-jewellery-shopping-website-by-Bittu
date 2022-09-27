<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Sub-Category</title>

    <?php
    include 'headerfiles.html';
    ?>
</head>
<body>
<?php
include "adminheader.php";
?>
<div class="container">
    <div class="row form-group col-md-8 justify-content-center offset-2">
        <label for="categoryname" class="font-weight-bolder"><u>Category Name</u></label>
        <select name="categoryname" id="categoryname" class="input-field" data-rule-required="true"
                data-msg-required="Category must be selected" onchange="showSubcategory(this.value)">
            <option value="">Select category</option>
            <?php
            $qury = "select categoryname from category";
            $res = mysqli_query($conn, $qury);
            while ($category = mysqli_fetch_assoc($res)) {
                ?>
                <option value="<?php echo $category["categoryname"]; ?>"><?php echo $category["categoryname"]; ?></option>
                <?php
            }
            ?>
        </select>
    </div>
    <div class="table-responsive" id="output">
        <?php
        $s = "select * from subcategory ORDER BY `subcategory`.`subcategoryid` DESC";
        $result = mysqli_query($conn, $s);
        if (mysqli_num_rows($result) > 0) {
            ?>
            <table class="table">
                <thead>
                <tr>
                    <th>Sr.&nbsp;No.</th>
                    <th>Sub&nbsp;Category&nbsp;Name</th>
                    <th>Sub&nbsp;Category&nbsp;Description</th>
                    <th>Category&nbsp;Name</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $k = 0;
                while ($row = mysqli_fetch_array($result)) {
                    $k++;
                    ?>
                    <tr>
                        <td><?php echo $k; ?></td>
                        <td><?php echo $row[1]; ?></td>
                        <td><?php echo $row[2]; ?></td>
                        <td class="text-capitalize"><?php echo $row[3]; ?></td>
                        <td><a onclick="return confirm('Are you Sure you want to Delete?')"
                               href="deletesubcategory.php?subcatid=<?php echo $row[0]; ?>"><i
                                        class="fa fa-trash"></i></a>
                        </td>
                        <td><a href="editsubcategory.php?subcatid=<?php echo $row[0]; ?>"><i
                                        class="fa fa-edit"></i></a>
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
                    <div class="alert alert-danger">No Data Found <span class="close"
                                                                        data-dismiss="alert">&times;</span></div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
    <?php
    if (isset($_GET['msg'])) {
        $msg = $_GET["msg"];
        echo $msg;
    }
    include_once 'footer.php';
    ?>
</div>
</body>
</html>
<?php
