<?php
include 'menus.php';
include 'connection.php';
if (isset($_GET['pid'])) {

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
    <h1>RECORD STOCK</h1>
    <hr>
    <label for="email"><b>Product Name</b></label>
    <input type="hidden" value="<?= $_GET['pid'];?>" name="pid" >
    <input type="text" readonly value="<?= $_GET['pname'];?>" name="pname">
    <label for="email"><b>Quantity</b></label>

    <input type="text" placeholder="Enter Quantity" name="quantity" required>
    <label for="email"><b>Unit Price</b></label>

    <input type="text" placeholder="Enter Unit Price" name="price" required>
    <button type="submit" class="registerbtn" name="go">ADD</button>
  </div>
</form>

</body>

</html>
<?php
if (isset($_POST['go'])) {
    $pid=$_POST['pid'];
    $quat=$_POST['quantity'];
    $price=$_POST['price'];
   
    
    $insert="INSERT INTO stock VALUES('','$pid','$quat','$price')";
    $si=$con->query($insert);
    if ($si==true) {
        header("location:vstock.php");
    }
    else {
        echo " failed";
    }
}
}
else {
    header("location:vproduct.php");
}
?>