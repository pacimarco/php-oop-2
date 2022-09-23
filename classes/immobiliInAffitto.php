<?php

include_once __dir__.'/immobili.php';

class propertyForRent extends Building{
    public $rentPrice;
    public $availability;

    public function __construct($address, $type, $condition, $area,$rentPrice,$availability) {
    parent::__construct($address, $type, $condition, $area);
    $this->rentPrice = $rentPrice;
    $this->availability = $availability;
    }
//funzione per stampare info
    public function houseInfo(){
        echo "immobile selezionato: " .$this->address .' - '.$this->area. ' - '.$this->rentPrice."<br>";
            
    }
        
//funzione per disponibilità
    public function availability($availability){
        $this->availability = $availability;
        if($availability== "disponibile"){
            
        echo 'al momento è ancora' . ' ' . $this->availability;
        }else if ($availability== "indisponibile") {
            echo 'al momento è' . ' ' . $this->availability;
        }
    }
}