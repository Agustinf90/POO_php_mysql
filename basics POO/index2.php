<?php

    require_once("ClassOperacion.php");

    $operacion1 = new Operacion(10,2);
    $operacion2 = new Operacion(100,3);

    $totalSuma = $operacion1->getSuma();
    echo $totalSuma;
    echo "<br>";

    $totalResta = $operacion1->getResta();
    echo $totalResta;
    echo "<br>";

    $totalMult = $operacion1->getMultiplicacion();
    echo $totalMult;
    echo "<br>";

    $totalDiv = $operacion1->getDivision();
    echo $totalDiv;
    echo "<br><br>";

    $totalSuma = $operacion2->getSuma();
    echo $totalSuma;
    echo "<br>";

    $totalResta = $operacion2->getResta();
    echo $totalResta;
    echo "<br>";

    $totalMult = $operacion2->getMultiplicacion();
    echo $totalMult;
    echo "<br>";

    $totalDiv = $operacion2->getDivision();
    echo $totalDiv;
    echo "<br><br>";
?>