<?php
include 'connection.php';
include 'menus.php';
?>
<div id="customers">
<a href="product.php">ADD PRODUCT</a>
</div>
<table id="customers">
    <tr>
        
        <th colspan="5"> LIST OF PRODUCT </th>
    </tr>
    <tr>
    <th>#</th>
    <th>ProductName</th>
    <th>ADD</th>
    <th colspan="2">ACTION</th>
    </tr>
<?php
$sign="SELECT * FROM product ORDER BY ProductName ASC";
$si=$con->query($sign);
if ($si->num_rows > 0) {
    $i=1;
    while ($row=$si->fetch_assoc()) {
        $id=$row['productId'];
        $pname=$row['ProductName'];
        $stock='<a href="stock.php?pid='.$id.'&pname='.$pname.'">ADD TO STOCK</a>';
        $update='<a href="update.php?upid='.$id.'&pname='.$pname.'">Update</a>';
        $delete='<a href="delete.php?did='.$id.'">Delete</a>';
        
        ?>
    <tr>
    <td><?= $i++;?></td>
    <td><?= $pname;?></td>
    <td><?= $stock;?></td>
    <td><?= $update;?></td>
    <td><?= $delete;?></td>
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