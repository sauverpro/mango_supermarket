<?php
include 'menus1.php';
include 'connection.php';
if (isset($_GET['cid'])) {

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
</style>
</head>
<body>

<form action="" method="POST">
  <div class="container">
    <h1>REQUEST </h1>
    <hr>
    <label for="email"><b>Product Name</b></label>
    <input type="hidden" readonly value="<?= $_GET['p_id'];?>" name="pid" >
    <input type="hidden" readonly value="<?= $_GET['s_id'];?>" name="sid" >
    <input type="hidden" readonly value="<?= $_GET['cid'];?>" name="cid" >

    <input type="text" readonly value="<?= $_GET['p_name'];?>" name="pname">
   
    <label for="email"><b>Unit Price</b></label>
    <input type="text" readonly value="<?= $_GET['price']?>" name="price" required>

    <label for="email"><b>Quantity</b></label>

<input type="text" placeholder="Enter Quantity" name="quantity" required>

    <button type="submit" class="registerbtn" name="go">REQUEST</button>
  </div>
</form>
</body>
</html>
<?php
if (isset($_POST['go'])) {
    $cid=$_POST['cid'];
    $sid=$_POST['sid'];
    $price=$_POST['price'];
    $quat=$_POST['quantity'];
    $total=$quat*$price;
    $status=0;
    $insert="INSERT INTO stockslip VALUES('','$cid','$sid','$quat','$total','$status')";
    $si=$con->query($insert);
    if ($si==true) {
        header("location:cart.php");
    }
    else {
        echo " failed";
    }
}
}
else {
    header("location:c_vstock.php");
}
?>