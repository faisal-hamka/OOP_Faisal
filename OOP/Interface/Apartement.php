<?php

include 'Room.php';
include 'Lantai.php';

class Apartement implements Room, Lantai {

    public function getJumlah() {
        return "Jumlah room berasal dari method ".__METHOD__." di class : " .__CLASS__;
    }

    public function getLantai() {
        return "Jumlah Lantai berasal dari method " . __METHOD__ . " di class : " . __CLASS__;
    }

}
