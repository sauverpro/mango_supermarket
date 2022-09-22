<?php
session_start();
include 'connection.php';
if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
   ?>
       <link rel="stylesheet" href="./css/main.css">

   <div class="sidebar topnav print" id="myTopnav">
   <div class="title">
   
            <h1>MANGO <span>supermarket</span> </h1>
           
        </div>
  <a href="vproduct.php">Products</a>
  <a href="vstock.php">Stock</a>
  <a href="stockslip.php">Stock Slip</a>
  <a href="users.php">Customers</a>
  <a href="logout.php">Logout</a>
  <a href="javascript:void(0);" style="font-size: 15px;" class="icon" onclick="myFunction()">&#9776;</a>

</div>
<div class="head print">
<h1><a class="active" href="dashboard.php">Dashboard</a> => <?= $_SESSION['username']?></h1>
</div>
   <?php
}
else {
    header("location:a_login.php");
}
?>  

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