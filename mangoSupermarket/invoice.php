<?php
include 'connection.php';
include 'menus.php';
if (isset($_GET['i_id'])) {
    ?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MANGO SUPER MARKET || INVOICE</title>
</head>
<body>
<div class="columns">
  <ul class="price">
    <li class="header" style="background-color:#4CAF50">MANGO <small>Supermarket</small></li>
    <li ><b>Customer:</b>  <?= $_GET['cname'];?></li>
    <li><b>Product:</b> <?= $_GET['pname'];?></li>
    <li><b>Quantity:</b> <?= $_GET['quant'];?></li>
    <li><b>Price:</b> <?= $_GET['price'];?></li>
    <li><b>Total:</b> <?= $_GET['total'];?></li>
    <li><b>Issued Date:</b> <?= date('l d-m-Y h:i:s A');?></li>
    <li class="grey print" onclick="window.print()"  class="button">PRINT</li>
  </ul>
</div>
</body>
</html>
    <?php
}
?>
