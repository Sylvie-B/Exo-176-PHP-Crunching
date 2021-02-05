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
////echo $i." mots font 15 car";
//
//echo "<br>";

//// contiennent w ?
//$w = 0;
//foreach ($dico as $word){
//    if (strpos($word, 'w')){
//    $w++;
//    }
//}
//
//echo $w." mots contiennent la lettre w";
//
//echo "<br>";
//
//$q = 0;
//foreach ($dico as $word){
//    $word = trim($word);
//    $pos = stripos($word, "q", -1);
//    if($pos){
//        $q++;
//    }
//}
//echo $q." mots finissent par la lettre q";
//
//echo "<br>";

$string = file_get_contents("films.json", FILE_USE_INCLUDE_PATH);
$brut = json_decode($string, true);
$top = $brut["feed"]["entry"]; # liste de films

// top 10
//$x = 1;
//for ($i = 0 ; $i < 10 ; $i++){
//    echo $x." ".$top[$i]["im:name"]["label"]."<br>";
//    $x++;
//}

