<?php

include_once("products.class.php");

try {
    $pizza_jamon = new Product(11, "Jamón y Morrón", 19000, "img/morron.jpg", 100);
    echo "Descripción de la pizza : " . $pizza_jamon->getDescription();
    echo "<br>";
    echo "Precio de la pizza : " . $pizza_jamon->getPrice();
    echo "<br>";
    echo "El stock es de: " . $pizza_jamon->getStock();
    echo "<br>";
    $pizza_jamon->setStock(130);
    echo "El nuevo Stock es : " . $pizza_jamon->getStock();
    
} catch (Exception $e) {
    echo "Error en el Producto";
}
