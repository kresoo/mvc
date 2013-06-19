<?php
$print_product="";
foreach ($results as $row) {

    $pname = $row['name'];
    $pdesc = $row['description'];
    $pprice = $row['price'];
    $id = $row['id'];
    $qty = $_SESSION['cart'][$id]['qty'];



    $print_product.=
            "
        <tr class='product_list' align='center'>
        <td width='20%'><h2>$pname<a href='cart.php?id=$id'> X </a></h2></td>
        <td width='20%'><h2>$pdesc</h2></td>
        <td width='10%'><h2>$pprice $</h2></td>
        <td width='10%'><h2>$qty</h2></td>
        <td width='10%'><h2>$</h2></td>
        </tr>
        ";
}

?>
<table>
    <? var_dump($_SESSION) ?>
    <?php echo $print_product?>
</table>