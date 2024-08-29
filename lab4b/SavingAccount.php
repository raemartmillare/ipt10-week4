<?php

require_once 'Account.php';

class SavingAccount extends Account{
    private $account_no;
    private $balance;


    public function __construct($account_no, $balance) {
        $this-> account_no = $account_no;
        $this-> balance = $balance;
    }
    
}

?>
