<?php

trait Cuaca
{
    public function cerah() {
        return "Cuaca hari ini cerah";
    }
}
trait Mendung
{
    public function mendung() {
        return "Cuaca hari ini mendung";
    }
}
trait Hujan
{
    public function hujan() {
        return "Cuaca hari ini hujan";
    }
}

class Pesan
{
  // menggunakan use
  use Cuaca ,Mendung ,Hujan;
}

$obj = new Pesan();
echo $obj->cerah();
echo '<br>';
echo $obj->mendung();
echo '<br>';
echo $obj->hujan();