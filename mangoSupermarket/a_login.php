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
    <h1>ADMIN LOGIN</h1>
    <hr>

    <label for="email"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="name" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" class="registerbtn" name="go">Login</button>
    
    <div class=" signin">
    <p>Already have an account? <a href="a_account.php">Sign in</a>.</p>
  </div>
  </div>
  
  
</form>

</body>

</html>

<?php
include 'connection.php';
if (isset($_POST['go'])) {
    $name=$_POST['name'];
    $pawd=md5($_POST['psw']);

$sign="SELECT * FROM admin WHERE username='".$name."' AND password='".$pawd."'";
$si=$con->query($sign);
if ($si->num_rows > 0) {
    while ($row=$si->fetch_assoc()) {
        $id=$row['adminId'];
        $user=$row['username'];
        $pass=$row['password'];
        $_SESSION['id']=$id;
        $_SESSION['username']=$user;
    }
    if ($name==$user && $pawd==$pass) {
        echo  "login successuful ";
        header("location:dashboard.php");
    }
}
else{
    echo "login failed";
}
}

?>