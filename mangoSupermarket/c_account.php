<?php
include 'home.php';
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
  <h1>CUSTOMER SIGIN UP</h1>
    <hr>
    <label for="email"><b>Name</b></label>
    <input type="text" placeholder="Enter Fullnames" name="name" required>
    <label for="email"><b>Phone</b></label>
    <input type="text" placeholder="Enter Phone" name="phone" required>
    <label for="email"><b>address</b></label>
    <input type="text" placeholder="Enter Address" name="address" required>

    <label for="psw"><b>Password</b></label>
    <input type="text" placeholder="Enter Pin" name="pin" required>

    <button type="submit" class="registerbtn" name="go">Register</button>
    
    <div class=" signin">
    <p>Already have an account? <a href="c_login.php">Sign in</a>.</p>
  </div>
  </div>
  
  
</form>

</body>

</html>
<?php
if (isset($_POST['go'])) {
  $name=$_POST['name'];
  $phone=$_POST['phone'];
    $address=$_POST['address'];
    $pin=md5($_POST['pin']);
    
    $sign="INSERT INTO customer VALUES('','$name','$phone','$address','$pin')";
    $si=$con->query($sign);
    if ($si==true) {
        header("location:c_login.php");
    }
    else {
        echo "sign up failed";
    }
}

?>