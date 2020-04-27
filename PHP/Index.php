<?php
    require_once("Car.php");
    require_once("UberX.php");
    require_once("UberPool.php");
    require_once("Account.php");
    
    $uberX = new UberX("PDI3043", new Account("Andres Herrera", "AN456"), "Chevrolet", "Spark");
    $uberX->printDataCar();

    $uberPool = new uberPool("FYKU4", new Account("Andrea Ferran", "FERR345"), "FIAT", "500");
    $uberPool->printDataCar();
?>