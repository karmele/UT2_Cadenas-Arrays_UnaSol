<?php

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


$resultado = "";

$resul = array();
foreach ($carrito as $clave => $valor) {
    if ($valor['precio'] < 25) {
        $resul[] = $valor;
    }
}
$resultado = "";
foreach ($resul as $valor) {
    $resultado = $resultado . "<div class='articulo'>
        <span class='descripcion'>Descripción "
        . $valor['desc'] . "<br>Precio " . $valor['precio'] .
        "</span>
    </div>";
}

/* foreach ($carrito as $libro) {
    if ($libro['precio'] < 25) {
        $resultado .= "<div class='articulo'>
                                   <span class='descripcion'>Descripci&oacute;n " . $libro['desc'] . "</span>
                                   <span>Precio " . $libro['precio'] . "</span>
                                   </div>";
        echo "<br />";
    }
} */
include 'includes/vista_resultado.php';
