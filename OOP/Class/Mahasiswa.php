<?php

class Mahasiswa {

    const Ket = "Laki-Laki";

    public function getKet() {
        return self::Ket;
    }

}

$mahasiswa = new Mahasiswa();

//memanggil konstanta dari method
//echo $user->getJK() . '<br>';
//memanggil konstanta dengan double colon
//echo $user::JK;
//pemanggilan class
echo Mahasiswa::Ket;