<?php
$product_print="";
foreach ($results as $row) {
    $row['id'];
    $row['name'];
    $row['description'];
    $row['price'];
    $row['barcode'];
    $row['quantity'];
    
    $id=$row['id'];
    $name=$row['name'];
    $desc=$row['description'];
    $price=$row['price'];
    $bc=$row['barcode'];
    
    
    
        $product_print.=
                "
        
        <tr class='table-bordered' align='center'>
        <td><h5>$name</h5></td>
        <td><h5>$desc</h5></td>
        <td><h5>$price $</h5></td>
        <td><h5>$bc</h5></td>    
        <td><h5><a href='http://mvc.local/product/view/id/$id'>See Details</a></h5></td> 
        </tr>
        
        ";

}
?>
<table width="100%">
    <tr class="table-bordered"  align='center'>
        <td><h4>Product Name</h4></td>
        <td><h4>Description</h4></td>
        <td><h4>Price</h4></td>
        <td><h4>Barcode</h4></td>    
        <td><h4>Product Details</h5></td> 
        </tr>
    <?php echo $product_print ?>
</table>
