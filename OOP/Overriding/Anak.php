<?php

class Anak {

    public $nama;

    public function Nama($nama) {
        echo " Nama = ". $nama;
    }

}
$anak = new Anak();
$anak->Nama('Faisal Hamka');