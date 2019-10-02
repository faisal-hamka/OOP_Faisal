<?php 

class Luas{ 
	
	function __call($luas, $sisi) { 
			
	
		if($luas == 'luas') { 
			
			switch (count($sisi)) { 
                //persegi Panjang
				case 1: 
					return $sisi[0] * $sisi[1]; 
						
                //persegi
				case 2: 
					return $sisi[0]*$sisi[1]; 
			} 
		} 
	} 
} 
	
// Declarasi
$LP = new Luas; 	
// Memanggil Function
//persegi panjang
echo 'Luas Persegi Panjang = ';
echo($LP->luas(2, 5)); 
echo "<br>"; 	
// persegi 
echo 'Luas Persegi = ';
echo ($LP->luas(4, 4)); 
?> 
