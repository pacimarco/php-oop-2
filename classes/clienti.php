<?php

include_once __dir__.'/utenti.php';

class Client extends User{
    

    public function __construct($name, $surname, $email, $phone, $address) {
    parent::__construct($name, $surname, $email, $phone, $address);
      
    
    }
}