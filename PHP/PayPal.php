<?php
require_once('Payment.php');
    class Paypal extends Payment {
        public $paypalAccount;
        public $ammount;

        public function __construct($id, $paypalAccount, $ammount){
            parent::__construct($id);
            $this ->paypalAccount = $paypalAccount;
            $this ->ammount = $ammount;
        } 

    }


?>