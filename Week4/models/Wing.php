<?php

require_once( __DIR__ . '/../interface/payment.php');

class Wing extends Payment {
    
    public function getTotal() {
        return $this->Price * $this->Qty; 
    }
}