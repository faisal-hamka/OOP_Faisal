<?php

include 'Laut.php';

class Bersih extends Laut {

    public function getStatus($warna) {
        return "Laut ini Bersih,karena warnanya  " . $warna;
    }

    public function getStatusLaut() {
        
    }

}