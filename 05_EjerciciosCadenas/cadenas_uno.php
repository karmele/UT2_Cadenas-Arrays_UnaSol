<?php
        
    $frase = "Estamos Encadenados a las cadenas";
    $resultado="";
    $resultado .= "<p>Longitud de la frase \"$frase\": ".strlen($frase)."</p>";
    $resultado .="<p>Frase en mayúsculas: ".strtoupper($frase)."</p>";
    include "includes/vista_resultado.php";
?>