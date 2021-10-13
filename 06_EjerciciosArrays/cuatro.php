<?php

include 'includes/cabecera.php';
include 'includes/funciones.php';

$carrito = array(
    array(
        "id" => 1,
        "desc" => "Diccionario Autraliano",
        "precio" => 24.95,
        "unidades" => 2
    ),
    array(
        "id" => 2,
        "desc" => "Building your own database",
        "precio" => 100,
        "unidades" => 4
    ),
    array(
        "id" => 3,
        "desc" => "Simply JavaScript",
        "precio" => 19.99,
        "unidades" => 3
    ),
    array(
        "id" => 4,
        "desc" => "Android programming",
        "precio" => 39.95,
        "unidades" => 1
    )
);

verArray($carrito);


foreach ($carrito as $libro) {
    foreach ($libro as $llave => $info) {
        if ($llave == "id" & $info == 3) {
            echo $libro['desc'];
        }
    }
}
echo "<hr />";

foreach ($carrito as $libro) {
    foreach ($libro as $llave => $info) {
        if ($llave == "precio" & $info > 25) {
            echo $libro['desc'];
            echo "<br />";
        }
    }
}
echo "<hr />";

$suma = 0;
foreach ($carrito as $libro) {
    $suma += $libro["precio"] * $libro["unidades"];
}
echo "<p>Valor total del carrito $suma &euro;</p>";
include 'includes/pie.php';
