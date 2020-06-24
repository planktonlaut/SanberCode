<?php

function palindrome_angka($angka) {
  // tulis kode di sini
	do{
		$angka++;
	}
	while ($angka!=strrev($angka));
	return $angka;
}

// TEST CASES
echo palindrome_angka(8); // 9
echo "<br>";
echo palindrome_angka(10); // 11
echo "<br>";
echo palindrome_angka(117); // 121
echo "<br>";
echo palindrome_angka(175); // 181
echo "<br>";
echo palindrome_angka(1000); // 1001

?>