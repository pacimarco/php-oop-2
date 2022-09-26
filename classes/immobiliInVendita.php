<?php

include_once __dir__.'/immobili.php';

class propertyForSale extends Building{
    public $salePrice;

    public function __construct( $type, $condition, $area,$salePrice) {
    parent::__construct( $type, $condition, $area);
    $this->salePrice = $salePrice;
    }
}