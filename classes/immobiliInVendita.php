<?php

include_once __dir__.'/immobili.php';

class propertyForSale extends Building{
    public $salePrice;

    public function __construct($address, $type, $condition, $area,$salePrice) {
    parent::__construct($address, $type, $condition, $area);
    $this->salePrice = $salePrice;
    }
}