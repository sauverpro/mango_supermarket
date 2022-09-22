<?php
include 'connection.php';
include 'menus.php';
?>
<table id="customers" style="width: 70%; margin-left: 20%;" >
    <tr>
    <th>#</th>
    <th>Name</th>
    <th>Phone</th>
    <th>Address</th>
    <th>Pin</th>
    <th class="print">ACTION</th>
    </tr>
    <?php
    
    $select="SELECT * FROM customer ORDER BY name ASC";
    $sel=$con->query($select);
    // start of if condition
    if ($sel->num_rows>0) {
        $n=1;
        
        // start of while loop
       while ($row=$sel->fetch_assoc()) {
        $id=$row['customerId'];
        $name=$row['name'];
        $phone=$row['phone'];
        $address=$row['address'];
        $pin=$row['pin'];
        $update1='<a href="update1.php?up_id='.$id.'&name='.$name.'&phone='.$phone.'&address='.$address.'&pin='.$pin.'">UPDATE</a>';
        $delete1='<a href="delete1.php?de_id='.$id.' ">DELETE</a>';
?>
<tr>
    <td><?= $n++;?></td>
    <td><?= $name;?></td>
    <td><?= $phone;?></td>
    <td><?= $address;?></td>
    <td><?= $pin;?></td>
    <td class="print"><?= $update1;?> <?= $delete1;?></td>
    </tr>
<?php
// end of while loop
       }
//    end of if cindition
    }

// start of else
else{
    ?>
<tr>
    <td>No customers</td>
</tr>
    <?php
}
    ?>
    <tr>
    <td colspan="6" class="print"> <button onclick="window.print()">PRINT</button></td>
    </tr>
</table>