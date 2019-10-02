<?php

require "Pesanan.php";
require "Sparepart.php";


//spl_autoload_register(function ($class) {
//    $file = __DIR__ . '/' . $class . '.php';
//    if (is_readable($file)) {
//        require $file;
//    }
//});

$list = new Pesanan;
$sparepart = new Sparepart();
echo $list->getPesanan();

echo " 1 : " . $sparepart->getRantai() . "<br>";
echo " 2 : " . $sparepart->getRoda() . "<br>";
echo " 3 : " . $sparepart->getGear() . "<br>";
echo " 4 : " . $sparepart->getVelg() . "<br>";
