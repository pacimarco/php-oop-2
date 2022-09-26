<?php
require_once __DIR__.'/../trait/indirizzo.php';
class Building {
    use Indirizzo;
    
    public $type;
    public $condition;
    public $area;


public function __construct( $type, $condition, $area) {
    
    
    $this->type = $type;
    $this->condition = $condition;
    $this->area = $area;
}
}