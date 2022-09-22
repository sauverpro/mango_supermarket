<?php
session_start();
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
  <h1>CUSTOMER lOGIN</h1>
    <hr>

    <label for="email"><b>Phone Number</b></label>
    <input type="text" placeholder="Phone Number" name="phone" required>

    <label for="psw"><b>Pin</b></label>
    <input type="text" placeholder="Enter Pin" name="pin" required>

    <button type="submit" class="registerbtn" name="go">Login</button>
    
    <div class=" signin">
    <p>Already have an account? <a href="c_account.php">Sign Up</a>.</p>
  </div>
  </div>
</form>
</body>
</html>

<?php
include 'connection.php';
if (isset($_POST['go'])) {
    $phone=$_POST['phone'];
    $pin=md5($_POST['pin']);

$sign="SELECT * FROM customer WHERE phone='".$phone."' AND pin='".$pin."'";
$si=$con->query($sign);
if ($si->num_rows > 0) {
    while ($row=$si->fetch_assoc()) {
        $id=$row['customerId'];
        $name=$row['name'];
        $phone=$row['phone'];
        $pins=$row['pin'];
        $_SESSION['cid']=$id;
        $_SESSION['name']=$name;
    }
    if ($phonee==$user && $pin==$pins) {
        echo  "login successuful ";
        header("location:dashboard2.php");
    }
}
else{
    echo "login failed";
}
}

?>