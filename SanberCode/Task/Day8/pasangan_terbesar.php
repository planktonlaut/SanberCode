<?php
function pasangan_terbesar($angka){
// kode di sini
    
    $angka="$angka";
    $x=strlen($angka);
    $max=0;
    $max2=0;
    for ($i=0; $i < $x; $i++) { 
        if ($angka[$i] > $max2){
            $max2=$angka[$i];
            $max=$angka[$i+1];
        } else if ($angka[$i] > $max2){
            if ($angka[$i+1] > $max){
                $max=$angka[$i+1];
            }
        }
    }

    return "Pasangan terbesar $angka : " . (10*$max2 + $max) . "<br>";

}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>