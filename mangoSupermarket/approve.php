<?php
include 'connection.php';
if (isset($_GET['a_id'])) {
    $sid=$_GET['stock'];
    $aid=$_GET['a_id'];
    $qua=$_GET['qua'];
    $approve="UPDATE stockslip SET status = 1 WHERE slipId='$aid'";
    $app=$con->query($approve);
    if ($app==true) {
        echo "approved";

        $select="SELECT quantity FROM stock WHERE stockId='$sid'";
        $se=$con->query($select);
        if ($se->num_rows>0) {
            while ($row=$se->fetch_assoc()) {
                $quat=$row['quantity'];
            }
            $new=$quat-$qua;
           $up=$con->query("UPDATE stock SET quantity='$new' WHERE stockId='$sid'");
            if ($up===true) {
                header("location:stockslip.php");
            }
           else{ 
            echo "not updated";
           }
        }
        else {
            echo "NO RECORD IN THE TABLE";
        }
    }
    else {
        echo "failed to approve";
    }
}

?>
