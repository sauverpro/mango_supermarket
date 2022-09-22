<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MANGO SUPERMARKET</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<!--  -->

<div class="topnav" id="myTopnav">
  <a href="index.php" class="active">Home</a>
  <div class="dropdown">
    <button class="dropbtn">CREATE ACCOUNT 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="a_account.php">ADMIN</a>
      <a href="c_account.php">CUSTOMER</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">LOGIN 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="a_login.php">ADMIN</a>
      <a href="c_login.php">CUSTOMER</a>
    </div>
  </div>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>


<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>


<!--  -->

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>


</body>
</html>