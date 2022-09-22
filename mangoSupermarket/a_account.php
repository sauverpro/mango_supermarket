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
    <h1>ADMIN SIGIN UP</h1>
    <hr>
    <label for="email"><b>Full Names</b></label>
    <input type="text" placeholder="Enter Full Names" name="fname" required>


    <label for="email"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="name" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" class="registerbtn" name="go">Register</button>
    
    <div class=" signin">
    <p>Already have an account? <a href="a_login.php">Sign in</a>.</p>
  </div>
  </div>
</form>

</body>

</html>
<?php
if (isset($_POST['go'])) {
    $fname=$_POST['fname'];
    $name=$_POST['name'];
    $pass=md5($_POST['psw']);
    
    $sign="INSERT INTO admin VALUES('','$fname','$name','$pass')";
    $si=$con->query($sign);
    if ($si==true) {
        header("location:a_login.php");
    }
    else {
        echo "sign up failed";
    }
}

?>