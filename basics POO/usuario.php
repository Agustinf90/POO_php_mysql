<?php 

    require_once("ClassUsuario.php");

    $objUsuario1 = new Usuario("Elvis Presley",
    "elvispresley@gmail.com", "Administrator");

    $objUsuario2 = new Usuario("Joey Ramone",
    "joeyramone@gmail.com", "Client");

    // echo $objUsuario1->strName;
    // echo Usuario::$strEstado;
    echo $objUsuario1->getProfile();
    echo "<br><br>";
    echo $objUsuario2->getProfile();
    echo "<br><br>";
    echo $objUsuario2->setChangePass("717171");
    echo "<br><br>";
    echo $objUsuario2->getProfile();
?>