<?php
include 'connection.php';
$id=$_GET['did'];
$delete="DELETE FROM product WHERE productId='$id' ";
$de=$con->query($delete);
if ($de==true) {
    echo "deleted";
    header("location:vproduct.php");
}
else{
    echo "not deleted";
}
?>