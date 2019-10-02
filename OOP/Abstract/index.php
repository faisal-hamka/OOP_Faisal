<?php

include 'Bersih.php';
include 'Kotor.php';

$bersih = new Bersih();
echo $bersih->getStatus('Biru');
echo "<br>";

$kotor = new Kotor();
echo $kotor->getStatus('Coklat');
