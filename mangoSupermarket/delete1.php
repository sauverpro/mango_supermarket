<?php
include 'connection.php';
include 'menus.php';
$id=$_GET['de_id'];
$dele="DELETE FROM customer WHERE customerId='$id'";
$de=$con->query($dele);
if ($de==true) {
    header("location:users.php");
}
else{
    echo 'not deleted';
}
?>