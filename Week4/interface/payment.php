<?php
    
    abstract class Payment {
        
        public function __construct(
            protected int $Price,
            protected int $Qty,
            protected string $Method
        ){}

        public function getPrice() {
            return $this->Price;
        }
        public function getQty() {
            return $this->Qty;
        }
        public function getPaymentType() {
            return $this->Method;
        }
        public abstract function getTotal();
    }