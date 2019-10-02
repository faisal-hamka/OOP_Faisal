<?php

class Demo {

    private $nama = 'Faisal';
    private $jeniskelamin = 'Laki-Laki';
    private $alamat = 'Tuban';
    private $kampus = 'UISI';

    public function keterangan() {
        echo "Nama $this->nama , Jenis Kelamin $this->jeniskelamin beralamatkan di $this->alamat dari Kampus $this->kampus " ;
    }

    // destructor
    public function __destruct() {
        echo '<br> destruktor.';
    }

    // constructor
    public function __construct() {
        echo 'konstruktor. <br>';
    }

}

// object 
$baru = new Demo();

echo $baru->keterangan();
