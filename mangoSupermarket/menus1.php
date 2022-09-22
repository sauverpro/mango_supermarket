<?php
session_start();
include 'connection.php';
if (isset($_SESSION['cid']) && isset($_SESSION['name'])) {
   ?>
       <link rel="stylesheet" href="./css/main.css">

   <div class="sidebar">
  <a class="active" href="dashboard2.php">Dashboard</a>
  <a href="c_vstock.php">Stock</a>
  <a href="cart.php">Cart</a>
  
  <a href="logout.php">Logout</a>
</div>
<div class="head">
<h1><?= $_SESSION['name']?></h1>
</div>
   <?php
}
else {
    header("location:c_login.php");
}
?>