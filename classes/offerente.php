<?php

include_once __dir__.'/clienti.php';

class Offerente extends Client{
    

    public function __construct($name, $surname, $email, $phone, $address) {
    parent::__construct($name, $surname, $email, $phone, $address);
    
    }
}