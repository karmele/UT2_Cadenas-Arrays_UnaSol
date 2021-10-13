<?php

include "includes/cabecera.php";

$texto = "<span class=\"texto\"> Texto</span> con etiquetas <strong>HTML</strong> ";

echo"<p>" . $texto . "</p>";
echo"<p>Aplicando htmlspecialchars()</p>";
echo"<p>" . htmlspecialchars($texto) . "</p>";

echo"<p>Aplicando strip_tags()</p>";
echo"<p>" . strip_tags($texto) . "</p>";

echo"<p>Sustituyendo la e por *</p>";
echo"<p>" . str_replace("e", "*", $texto) . "</p>";
echo"<p>$texto</p>";

include "includes/pie.php";
?>