<?php
include 'Math.php';
include 'Circle.php';

use Math\Geometry\Circle as Circ;

$circle = new  Circ(10);
echo 'Total Luas Liangkaran =';
echo $circle -> getDiameter(); 		// 20
echo $circle -> getArea(); 			// 314.159
echo $circle -> getCircumference(); // 62.8318