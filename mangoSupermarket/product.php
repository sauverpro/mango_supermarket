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
    <h1>ADMIN SIGIN UP</h1>
    <hr>
    <label for="email"><b>Product Name</b></label>
    <input type="text" placeholder="Enter Product Name" name="pname" required>

    
    <button type="submit" class="registerbtn" name="go">ADD</button>
    
  </div>
</form>

</body>

</html>
<?php
if (isset($_POST['go'])) {
    $pname=$_POST['pname'];
   
    
    $insert="INSERT INTO product VALUES('','$pname')";
    $si=$con->query($insert);
    if ($si==true) {
        header("location:vproduct.php");
    }
    else {
        echo " failed";
    }
}

?>