<?php

include 'Anak.php';

class Ayah extends Anak {

    public $nama;

    public function Nama($nama) {
        echo $nama . "  Anak dari Pak Budi";
    }

}

$anak = new Ayah();
$anak->Nama('<br> Faisal Hamka');
