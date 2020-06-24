<?php

function papan_catur($angka) {
// tulis kode di sini
	$i=0;
	while ($i<$angka/2) {
		for ($j=0; $j < $angka; $j++) { 
			echo " # ";
		}
		echo "<br>";
		if ($angka%2!=0 && $i==($angka/2)-0.5) {
			echo "";
		}
		else{
			for ($j=1; $j < $angka; $j++) { 
				echo "&nbsp#";
			}
		}
		echo "<br>";
		$i++;
	}
	echo "<br>";
}

// TEST CASES
echo papan_catur(4); 
/*
# # # #
 # # #
# # # #
 # # #
 */
echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
*/

echo papan_catur(5); 
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/
echo papan_catur(9);