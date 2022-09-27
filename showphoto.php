<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    include_once 'headerfiles.html';
    ?>
</head>
<body>
<?php
include_once 'adminheader.php';
$pid = $_GET["productid"];
$qury = "select * from product_photo INNER join product ON product_photo.productid = product.productid where product_photo.productid ='$pid'";
$result = mysqli_query($conn, $qury);
if (mysqli_num_rows($result) > 0){
?>

<div class="container">
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Sr no.</th>
                <th>Photo</th>
                <th>Caption</th>
                <th>Product Name</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $k = 0;
            while ($photo = mysqli_fetch_array($result)) {
                $k++;
                ?>

                <tr>
                    <td><?php echo $k;?></td>
                    <td><img style="height: 100px;width: 100px" src="<?php echo $photo[1];?>" alt=""></td>
                    <td><?php echo $photo[2];?></td>
                    <td><?php echo $photo[5];?></td>
                    <td><a onclick="return confirm('Are you Sure you want to Delete?')"
                           href="deletephoto.php?photoid=<?php echo $photo[0]; ?>&productid=<?php echo $photo['productid'];?>"><i
                                class="fa fa-2x fa-trash"></i></a>
                    </td>
                    <td><a href="editphoto.php?photoid=<?php echo $photo[0]; ?>"><i
                                class="fa fa-2x fa-edit"></i></a>
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
        } ?>

    </div>
    <?php
    include_once 'footer.php';
    ?>
</div>
</body>
</html>
<?php
