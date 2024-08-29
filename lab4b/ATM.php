<?php 
class ATM {
    private $location;
    private $managedbly;   

    public function __construct($location, $managedbly) {
        $this->location = $location;
        $this->managedbly = $managedbly;
    }

    public function identifies(){
        return false;
    }

    public function transactions(){
        return false;
    }
}


?>
