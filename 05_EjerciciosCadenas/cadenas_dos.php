<?php

include"includes/cabecera.php";

$frase = "Estamos Encadenados a las cadenas";
$palabras = explode(" ", $frase);

echo"<p>Palabras en la frase \"$frase\": " . count($palabras) . "</p>";

$letra = "E";

//Utilizo el mismo array que antes he definido $palabras
//Es un arrray que contiene las palabras de la $frase 

$contador = 0;

foreach ($palabras as $palabra) 
{
    if (strtoupper(substr($palabra, 0, 1)) === $letra) 
    {
        ++$contador;
    }
}

echo"<p>Palabras en la frase \"$frase\" que empiezan por $letra: " . $contador . "</p>";

include"includes/pie.php";
?>
