<?php

    require_once("ClassOperacion.php");

    $objRaiz = new Calcular();

    echo $objRaiz ->raizCuadrada(9);

    $objPot = new Calcular();
    echo "<br>";
    echo $objPot ->potencia(5,5);

?>