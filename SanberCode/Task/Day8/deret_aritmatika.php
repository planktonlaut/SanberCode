<?php
function tentukan_deret_aritmatika($arr) {
// kode di sini
	$x=count($arr);
	$y=$x-1;
	$selisih=array();
	for ($i=0; $i < $x; $i++) { 
		if ($i==$y) {
			
		}
		else{
			$selisih[]=$arr[$i+1]-$arr[$i];
		}
	}
	if (max($selisih)==min($selisih)) {
		echo "true<br>";
	}
	else{
		echo "false<br>";
	}
}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
?>