<?php

include_once("products.class.php");
include_once("discount.class.php");

try {
    $pizza_roquefort = new Discount(11, "Roquefort", 19000, "img/roquefort.jpg", 200, 5);
    echo "Descripción de la pizza : " . $pizza_roquefort->getDescription();
    echo "<br>";
    echo "Precio de la pizza : " . $pizza_roquefort->getPrice();
    echo "<br>";
    echo "El stock es de: " . $pizza_roquefort->getStock();
    echo "<br>";
    $pizza_roquefort->setStock(130);
    echo "El nuevo Stock es : " . $pizza_roquefort->getStock();
    $pizza_roquefort->reduceStock(10);
    echo "<br>";
    echo "El nuevo stock es de: " . $pizza_roquefort->getStock();
    echo "<br>";
    echo "El descuento es de: " . $pizza_roquefort->getDiscountPercentage();
} catch (Exception $e) {
    echo "Error en el Producto";
}
