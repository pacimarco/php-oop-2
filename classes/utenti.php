<?php
class User {
    public $name;
    public $surname;
    public $email;
    public $phone;
    public $address;
    

public function __construct($name, $surname, $email, $phone, $address) {
    $this->name = $name;
    $this->surname = $surname;
    $this->email = $email;
    $this->phone = $phone;
    $this->address = $address;
}

//Methods per stampare NOME e COGNOME
public function getFullName() {
    return $this->name.'  '. $this->surname. "<br>";
    
}
}