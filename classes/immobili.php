<?php
class Building {
    
    public $address;
    public $type;
    public $condition;
    public $area;


public function __construct($address, $type, $condition, $area) {
    
    $this->address = $address;
    $this->type = $type;
    $this->condition = $condition;
    $this->area = $area;
}
}