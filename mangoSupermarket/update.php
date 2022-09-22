<?php
include 'menus.php';
include 'connection.php';
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
    <h1>UPDATE PRODUCT</h1>
    <hr>
    <input type="hidden" value="<?= $_GET['upid'];?>" name="pid" >
    <input type="text"  value="<?= $_GET['pname'];?>" name="pname">
    <button type="submit" class="registerbtn" name="go">UPDATE</button>
  </div>
</form>
</body>
</html>
<?php
if (isset($_POST['go'])) {
    $pid=$_POST['pid'];
    $pname=$_POST['pname'];
    $updae="UPDATE product SET ProductName='$pname'  WHERE productId='$pid'";
    $si=$con->query($updae);
    if ($si==true) {
        header("location:vproduct.php");
    }
    else {
        echo " failed";
    }
}
?>