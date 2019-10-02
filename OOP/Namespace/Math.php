<?php
namespace Math;

function add($a, $b) {
	return $a + $b;
}
const PI = 3.14;

class Constants {
	const PI = 3.14159;
}

class Geometry {
	static function getCircleArea($radius) {
		return PI * $radius ** 2;
	}
}