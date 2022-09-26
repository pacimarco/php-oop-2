<?php
trait Indirizzo {
    public $indirizzo;
    public $ncivico;
    public $comune;
    public $provincia;
    public $cap;

    public function setIndirizzo() {
        return $this->indirizzo . ' ' . $this->ncivico . ' ' . $this->comune . ' ' . $this->provincia . ' ' . $this->cap;
    }
}

