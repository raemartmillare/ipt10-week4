<?php 
class Account {
    private $number;
    private $balance;   

    public function __construct($number, $balance) {
        $this->number = $number;
        $this->balance = $balance;
    }

    public function deposit(){
        return false;
    }

    public function withdraw(){
        return false;
    }

    public function createTransaction(){
        return false;
    }
}


?>
