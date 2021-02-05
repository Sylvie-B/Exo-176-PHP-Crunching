<?php

$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
$string = trim($string);
$dico = explode("\n", $string);

//// combien de mots dans le dictionnaire
//echo "il y a ".count($dico)." mots dans le dictionnaire";

//// combien de mots font 15 car
//$i = 0;
//foreach ($dico as $word){
//    if (strlen($word) === 15){
//        $i++;
//    }
//}
//
//echo $i." mots font 15 car";

//// contiennent w ?
//$w = 0;
//foreach ($dico as $word){
//    if (strpos($word, 'w')){
//    $w++;
//    }
//}
//
//echo $w." mots contiennent la lettre w";

$q = 0;
foreach ($dico as $word){
    $word = trim($word);
    $pos = stripos($word, "q", -1);
    if($pos){
        $q++;
    }
}
echo $q;

