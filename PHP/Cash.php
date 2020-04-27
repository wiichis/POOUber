<?php
require_once('Payment.php');
    class Cash extends Payment {
        public $ammount;

        public function __construct($id, $ammount){
            parent::__construct($id);
            $this ->ammount = $ammount;
        } 
    }

?>