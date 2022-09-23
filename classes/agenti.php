<?php

include_once __dir__.'/utenti.php';

class Agent extends User{
    protected $p_iva;

    public function __construct($name, $surname, $email, $phone, $address,$p_iva) {
    parent::__construct($name, $surname, $email, $phone, $address);
    $this->p_iva = $p_iva;
    }
}