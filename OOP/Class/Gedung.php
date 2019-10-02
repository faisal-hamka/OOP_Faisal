<?php

class Gedung {

    public $jumlahRoom;
    private $jumlahLantai;

    public function setJumlahRoom($jumlahRoom) {
        $this->jumlahRoom = $jumlahRoom;
    }

    public function setJumlahLantai($jumlahLantai) {
        $this->jumlahLantai = $jumlahLantai;
    }

    public function detail() {
        echo 'Gedung ini memiliki Kapasitas ' . $this->jumlahRoom . ' Ruang dan tinggi' . $this->jumlahLantai . ' Lantai.';
    }

}

$gedung = new Gedung();
$gedung->setJumlahRoom(14);
$gedung->setJumlahLantai(16);
$gedung->detail();
