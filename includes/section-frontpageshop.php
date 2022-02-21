<?php 
// Get 10 most recent product IDs in date descending order.
$query = new WC_Product_Query( array(
    'limit' => 10,
    'orderby' => 'date',
    'order' => 'DESC',
    'return' => 'ids',
) );
$products = $query->get_products();

echo $products[0];
?>

