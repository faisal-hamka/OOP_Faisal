<?php

include 'Mie.php';

class Makanan extends Mie {

   
//     public function getPedas() {
//         return parent::getPedas();
//     }
//     public function getLumayanPedas() {
//         return parent::getLumayanPedas();
//     }

//     public function getTidakPedas() {
//         return parent::getTidakPedas();
//     }

}

$makanan = new Makanan();

echo $makanan->getPedas();
echo '<br>';
echo $makanan->getLumayanPedas();
echo '<br>';
echo $makanan->getTidakPedas();
