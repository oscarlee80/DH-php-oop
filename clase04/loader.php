<?php
require 'Classes/Product.php';
require 'Classes/Category.php';
require 'helpers.php';

$category1 = new Category("Ropa");
$category2 = new Category("Comida");
$category3 = new Category("Limpieza");

$product1 = new Product("Remera", "Talle L", "300", $category1);
$product2 = new Product('Cafe', "Colombiano", "200", $category2);
$product3 = new Product('Lavandina', "5 litros", "100", $category3);


dd($product1);