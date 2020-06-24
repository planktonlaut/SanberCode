<?php
function tukar_besar_kecil($string){
	$alphabet = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
	$bigAlphabet = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
	$newString='';
	$x=strlen($string)-1; 
		for ($i=0; $i <= $x; $i++) { 
			if(in_array($string[$i], $alphabet) || in_array($string[$i], $bigAlphabet)){
				for ($j=0; $j < 26; $j++) {
					if ($string[$i]==$alphabet[$j]) {
						$newString.=strtoupper($string[$i]);
					}
					else if ($string[$i]==$bigAlphabet[$j]){
						$newString.=strtolower($string[$i]);
					}
				}
			}
			else{
				$newString.=$string[$i];
			}	
		}
		echo $newString."<br>";
	}

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>