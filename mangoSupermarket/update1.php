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
  <h1>UPDATE CUSTOMER</h1>
    <hr>
    <label for="email"><b>Name</b></label>
    <input type="hidden" value="<?= $_GET['up_id'];?>" name="id" required> 
    <input type="text" value="<?= $_GET['name'];?>" name="name" required>

    <label for="email"><b>Phone</b></label>

    <input type="text" value="<?= $_GET['phone'];?>"  name="phone" required>

    <label for="email"><b>address</b></label>

    <input type="text" value="<?= $_GET['address'];?>"  name="address" required>

    <label for="psw"><b>Pin</b></label>

    <input type="text" value="<?= $_GET['pin'];?>"  name="pin" required>

    <button type="submit" class="registerbtn" name="go">UPDATE</button>

  </div>
  
  
</form>

</body>

</html>
<?php
if (isset($_POST['go'])) {
    $id=$_POST['id'];
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $pin=md5($_POST['pin']);
    
    $update="UPDATE customer SET name='$name', phone='$phone', address='$address', pin='$pin' WHERE customerId='$id' ";
    $si=$con->query($update);
    if ($si==true) {
        header("location:users.php");
    }
    else {
        echo " failed to update";
    }
}
?>