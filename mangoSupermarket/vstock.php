<?php
include 'connection.php';
include 'menus.php';

?>
<div id="customers">
<a href="stock.php">RECORD STOCK</a>
</div><table id="customers">
<tr>
        <th colspan="4"> LIST OF PRODUCT IN STOCK</th>
    </tr>
    <tr>
    <th>#</th>
    <th>ProductName</th>
    <th>Quantity</th>
    <th >Price</th>
    </tr>

<?php
$sign="SELECT * FROM product,stock WHERE product.productId=stock.productId ORDER BY product.ProductName ASC";
$si=$con->query($sign);
if ($si->num_rows > 0) {
    $i=1;
    while ($row=$si->fetch_assoc()) {
        $id=$row['productId'];
        $pname=$row['ProductName'];
        $quantity=$row['quantity'];
        $price=$row['unitPrice'];
       
        ?>
    <tr>
    <td><?= $i++;?></td>
    <td><?= $pname;?></td>
    <td><?= $quantity;?></td>
    <td><?= $price;?></td>
    <!-- <td><?= $delete;?></td> -->
    </tr>

        <?php

    }
   
}
else{
    ?>
    <tr>
        <td colspan="3">No Product Found In The Table</td>
    </tr>
    <?php
   
}
?>
</table>