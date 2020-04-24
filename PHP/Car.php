<?php

class Account {
    public $id;
    public $license;
    public $driver;
    public $passenger;

    public function __construct($license, Account $driver){
        $this ->license = $license;
        $this ->driver = $driver;
    }

    public function printDataCar(){
        echo "la licencia es: ". this->license." , el driver es:"
        .$this->driver->name." y su documento es: ".$this->driver->document;
    }
}

?>