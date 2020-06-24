<?php
function ubah_huruf($string){
//kode di sini
	$alphabet = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
	$x=strlen($string)-1;
	$new_String='';
		for ($i=0; $i <= $x; $i++) { 
			for ($j=0; $j < 26; $j++) { 
				if ($string[$i]==$alphabet[$j]) {
					$new_String.=$alphabet[$j+1];
				}
				else{}
			}
		}
		echo $new_String;
		echo "<br>";
	}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>