<?php
include 'connection.php';
include 'menus1.php';

?>

<table id="customers">
    <tr>
    <th>#</th>
    <th>ProductName</th>
    <!-- <th>Quantity</th> -->
    <th >Price</th>
    <th >Action</th>
    
    </tr>

<?php
$sign="SELECT * FROM product,stock WHERE product.productId=stock.productId ORDER BY product.ProductName ASC";
$si=$con->query($sign);
if ($si->num_rows > 0) {
    $i=1;
    while ($row=$si->fetch_assoc()) {
        $id=$row['productId'];
        $sid=$row['stockId'];
        $pname=$row['ProductName'];
        $quantity=$row['quantity'];
        $price=$row['unitPrice'];
        $request='<a href="request.php?p_id='.$id.'&s_id='.$sid.'&p_name='.$pname.'&quant='.$quantity.'&price='.$price.'&cid='.$_SESSION['cid'].'">Request</a>';
        ?>
    <tr>
    <td><?= $i++;?></td>
    <td><?= $pname;?></td>
    <!-- <td><?= $quantity;?></td> -->
    <td><?= $price;?></td>
    <td><?= $request;?></td>
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