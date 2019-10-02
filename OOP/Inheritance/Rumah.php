<?php

class Rumah {
    

    public $type , $ukuran , $lokasi;

    public function jenis() {
        return " Rumah ini bertype = .$this->type  memiliki Ukuran = .$this->ukuran  serta beraloksikan di .$this->lokasi";
    }
    

}
