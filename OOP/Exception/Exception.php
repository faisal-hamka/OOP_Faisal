<?php

function Nilai($number) {
  if($number>7) {
    throw new Exception("Nilai harus minimal 7");
  }
  return true;
}


try {
  Nilai(2);
 
  echo 'Nilai anda masih kurang';
}


catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}
?>