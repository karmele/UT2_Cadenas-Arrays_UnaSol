<?php
include 'includes/cabecera.php';
include 'includes/funciones.php';
$paises = array(
    "Austria" => "Viena",
    "Italia" => "Roma",
    "Francia" => "París",
    "España" => "Madrid",
    "Portugal" => "Lisboa",
    "Irlanda" => "Dublín",
    "Alemania" => "Berlín",
    "Grecia" => "Atenas"
);

verArray($paises);

echo "<hr />";

ksort($paises);
verArray($paises);

echo "<hr />";

arsort($paises);
verArray($paises);

echo "<hr />";

$pais="Italia";

$estaEn = array_key_exists($pais, $paises);

if ($estaEn) {
    echo "<h2> $pais se encuentra entre los países</h2>";
}
echo "El array de claves";
echo "<h2>Paises</h2>";
$pais = array_keys($paises);
verArray($pais);

echo "<h2>Capitales de EU</h2>";
$capitales = array_values($paises);
verArray($capitales);


$pais = array_search("Atenas", $paises);  //Mejor opción
echo "El país es <span class='texto'> $pais </span>";

//if (!$capital) {
//    echo "<p>No existe el país</p>";
//} else {
//    foreach ($paises as $pais => $capital) {
//        if ($capital == "Atenas") { { //También con key($array)
//                echo "El país es $pais";
//            }
//        }
//    }
//}

include 'includes/pie.php';
