<?php
require_once('Payment.php');
    class CreditCard extends Payment {
        public $cardNumber;
        public $cvv;
        public $expirationDate;
        public $ammount;

        public function __construct($id, $cardNumber, $cvv, $expirationDate, $ammount){
            parent::__construct($id);
            $this ->cardNumber = $cardNumber;
            $this ->cvv = $cvv;
            $this ->expirationDate = $expirationDate;
            $this ->ammount = $ammount;
        } 

    }

?>