<?php

class Pesanan{

    public $list;

    public function __construct() {
        $this->list = "Barang Yang Dipesan";
     
    }

    public function getPesanan() {
        return $this->list;
    }

    

}
