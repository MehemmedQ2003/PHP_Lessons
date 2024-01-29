<?php

$productName = "Samsung";
$productPrice = 2000;
$edvPercent = 0.18;

$productPrice = $productPrice + $productPrice * $edvPercent;

echo $productPrice,"</br>";

// $result = $productName." adlı malın qiyməti ".$productPrice." manatdır";

$result = "{$productName} adli malin qiymeti {$productPrice} manatdir";

echo $result."</br>";
echo $result[0]."</br>";
echo $result[10]."</br>";


// string method
echo strlen($result)."</br>";
echo str_word_count($result)."</br>";
echo strtoupper($result)."</br>";
echo strtolower($result)."</br>";

?>