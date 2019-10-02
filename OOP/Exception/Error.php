<?php

function Nilai($number) {
  if($number>7) {
    throw new Exception("Nilai anda minimal 7");
  }
  return true;
}


Nilai(2);
?>