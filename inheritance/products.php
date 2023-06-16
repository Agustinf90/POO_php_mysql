<?php
    require_once("ClassTable.php");

    $objBed = new Product("Bed", 7000);
    $arrInfoProduct = $objBed->getProductInfo();

    print_r("<pre>");
    print_r($arrInfoProduct);
    print_r("<pre>");

    $objFntre = new Furniture("closet", 24000, "brandi", "brown","wood");
    $arrInfoFurniture = $objFntre->getProductInfo();

    print_r("<pre>");
    print_r($arrInfoFurniture);
    print_r("<pre>");

    $objTable = new Table("puertita", 8000, "brandia", "brown","wood","2mts");
    $objTable->setForm("round");
    $arrInfoTable = $objTable->getProductInfo();

    print_r("<pre>");
    print_r($arrInfoTable);
    print_r("<pre>");

?>