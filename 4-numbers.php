<?php

$count1 = 10;
$count2 = 20;

echo "Sum: ".($count2 + $count1)."</br>";
echo "Sup: ".($count2 - $count1)."</br>";
echo "Mul: ".($count2 * $count1)."</br>";
echo "Div: ".($count2 / $count1)."</br>";

echo "</br>";

echo is_int($count1)."</br>";
echo var_dump(is_int($count1))."</br>";
echo var_dump(is_float($count1))."</br>";
echo var_dump(is_numeric($count1))."</br>";

echo "</br>";

echo ceil(5.2)."</br>";
echo floor(10.8)."</br>";
echo round(4.6)."</br>";
echo sqrt(100)."</br>";
echo abs(-33)."</br>";

?>