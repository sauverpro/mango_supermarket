<?php
include 'connection.php';
include 'menus.php';

?>
<table id="customers">
<tr>
        <th colspan="7"> STOCK SLIP </th>
    </tr>
    <tr>
    <th>#</th>
    <th>Customer Name</th>
    <th>Product</th>
    <th>Quantity</th>
    <th >Price</th>
    <th>Total Price</th>
    <th>ACTION</th>
    </tr>
<?php
$sign="SELECT * FROM product,stock,customer,stockslip WHERE product.productId=stock.productId 
AND stock.stockId=stockslip.stockId 
AND customer.customerId=stockslip.customerId 
ORDER BY stockslip.slipId DESC";
$si=$con->query($sign);
if ($si->num_rows > 0) {
    $i=1;
    while ($row=$si->fetch_assoc()) {
        $slpid=$row['slipId'];
        $stockId=$row['stockId'];
        $cid=$row['customerId'];
        $cname=$row['name'];
        $cphone=$row['phone'];
        $caddress=$row['address'];
        $id=$row['productId'];
        $pname=$row['ProductName'];
        $quantity=$row['quantity'];
        $price=$row['unitPrice'];
        $total=$row['totalprice'];
        if ($row['status']==0) {
            $option='<a href="approve.php?a_id='.$slpid.'&qua='.$quantity.'&stock='.$stockId.'">APPROVE</a>';
            $invoice="";
        }
        else {
            $option='<a href="deny.php?a_id='.$slpid.'">DENY</a>';
            $invoice='<a href="invoice.php?i_id='.$slpid.'&cname='.$cname.'&pname='.$pname.'&quant='.$quantity.'&total='.$total.'&price='.$price.'">INVOICE</a>';
        }
        ?>
    <tr>
    <td><?= $i++;?></td>
    <td><?= $cname;?></td>
    <td><?= $pname;?></td>
    <td><?= $quantity;?></td>
    <td><?= $price;?></td>
    <td><?= $total;?></td>
    <td><?= $option;?> <?= $invoice;?></td>
    </tr>

        <?php

    }
}
else{
    ?>
    <tr>
        <td colspan="6">No Product Found In The Table</td>
    </tr>
    <?php
}
?>
</table>