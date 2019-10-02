<?php

include 'Apartement.php';


$bangunan = new Apartement();
echo 'My Apartemen';
echo '<br>';
echo $bangunan->getJumlah();
echo "<br>";
echo $bangunan->getLantai();
