<?php

include 'Rumah.php';

class RumahMewah extends Rumah {

    public $mewah = false;

    public function setJenisRumah() {
        $this->mewah = true;
        return "Rumah ini Mewah";
    }

}

$rumah = new Rumah();
$rumah = new RumahMewah();

echo $rumah->jenis();
echo "<br>";
echo $rumah->setJenisRumah();
