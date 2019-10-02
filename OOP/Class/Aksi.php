<?php
include 'Demonstran.php';

class Aksi extends Demonstran {

    public function getEx(){
        return $this->nama;
    }
}

$anarkis = new Aksi();

echo $anarkis->getEx();
