<?php

//Dummy data
$skor = [
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Budi",
    "kelas" => "React Native",
    "nilai" => 70
  ],
  [
    "nama" => "Susi",
    "kelas" => "Laravel",
    "nilai" => 75
  ],
];

function skor_terbesar($arr){
//kode di sini
    echo '<pre>';
    $arr_result = [];
    foreach ($arr as $row) {
        if(array_key_exists($row['kelas'], $arr_result)){
            if($row['nilai']> $arr_result[$row['kelas']]['nilai']){
                $arr_result[$row['kelas']] = $row;
            }
        }else{
            $arr_result[$row['kelas']] = $row;
        }
    }
    print_r($arr_result);
    echo '<pre>';
}

// TEST CASES
print_r(skor_terbesar($skor));
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>