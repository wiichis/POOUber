<?php
    require_once 'Car.php';
    require_once 'Account.php';
    
    echo "<h1>"."PROGRAMCION ORIENTADA A OBJETOS "."</h1>;

    $car = new Car("MQ234", new Account("Daniel", "4805771"));
    $car ->printDataCar();


?>