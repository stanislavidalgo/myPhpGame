<?php
include_once 'Product.php';
$product1 = new Product();
$product1->setName('Batai');
$product1->setPrice('12.12');
$product1->setDescription('Rudeniniai batai tinkantis ,,,,');
$product1->setShortDescription('Rudeniniai batai tinkantis ,,,,');
$product1->setSku('1234566');
echo '<pre>';
print_r($product1);

echo $product1->getPriceWithTax();
