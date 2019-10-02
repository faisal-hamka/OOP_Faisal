<?php

class Sparepart {

    public $rantai,$roda,$gear,$velg;

    public function __construct() {
        $this->rantai = "Pesan Rantai";
        $this->roda = "Pesan Roda";
        $this->gear = "Pesan Gear";
        $this->velg = "Pesan Velg";
    }

    public function getRantai() {
        return $this->rantai;
    }
    public function getRoda() {
        return $this->roda;
    }
    public function getGear() {
        return $this->gear;
    }
    public function getVelg() {
        return $this->velg;
    }
    

}
