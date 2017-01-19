<?php
$arr = [5, 6.5, 10, 3.355, 400, 9.43];


function test($arr,$a) {
	if($a > 0) {
		$array =[];
		foreach($arr as $value) {
			 $result = $value * $a;
			 $array[] .= $result; 		 
		}return $array;
	}return  "ERROR!!!!";
}

echo "<pre>";
print_r(test ($arr,0.5));
echo "</pre>";