<?php

    require_once("ClassEmployee.php");
    require_once("ClassClient.php");

    $objEmployee = new Employee(717171,
     "John Lord", 3012);
    $objEmployee->setJob("admin");
    $objEmployee->setMsg("Bienvenidos Locooooooooo");

    $objClient = new Client(717172,
     "James Rod", 22);
    $objClient->setCredit("251252");
    $objClient->setMsg("Bienvenidos Clientoooo");

     echo $objEmployee->getPersonalData();
     echo $objEmployee->getJob();
     echo $objEmployee->getMsg();
     echo "<br>";
     echo $objClient->getPersonalData();
    //  echo $objClient->getJob();
     echo $objClient->getMsg();
     echo "<br>".$objClient->getCredit();

    //  echo "<br>".$objClient->getPersonalData();
    //  echo "<br>".$objClient->getCredit();



?>