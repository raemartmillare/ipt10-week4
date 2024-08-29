<?php 
class Customer {
    private $name;
    private $address;
    private $dob;
    private $card_number;
    private $pin;
       
       
    public function __construct($name, $address, $dob, $card_number, $pin ) {
        $this->name = $name;
        $this->address = $address;
        $this->dob = $dob;
        $this->card_number = $card_number;
        $this->pin = $pin;
    }

    public function verifyPassword(){
        return false;
    }

   
}


?>
