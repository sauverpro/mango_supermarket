<?php
include 'connection.php';
if (isset($_GET['a_id'])) {
    $aid=$_GET['a_id'];
    $deny="UPDATE stockslip SET status = 0 WHERE slipId='$aid'";
    $de=$con->query($deny);
    if ($de==true) {
        echo " denied";
        header("location:stockslip.php");
    }
    else {
        echo "failed";
    }
}

?>