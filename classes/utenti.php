<?php

require_once __DIR__.'/../trait/indirizzo.php';
class User {
    use Indirizzo;
    public $name;
    public $surname;
    public $email;
    public $phone;
    
    

public function __construct($name, $surname, $email, $phone) {
    $this->name = $name;
    $this->surname = $surname;
    $this->email = $email;
    $this->phone = $phone;
    
}

//Methods per stampare NOME e COGNOME
public function getFullName() {
    return $this->name.'  '. $this->surname. "<br>";
    
}
}