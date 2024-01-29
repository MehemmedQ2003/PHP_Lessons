<?php

    // ? 1 - Arithmetic

    $a = 20;
    $b = 10;

    echo $a + $b."</br>";
    echo $a - $b."</br>";
    echo $a * $b."</br>";
    echo $a / $b."</br>";
    echo $a ** $b."</br>";
    echo $a++."</br>";
    echo $a."</br>";
    echo "</br>";
    


    // TODO 2 - Assignment
    
    $a = 20;
    $b = 10;

    $a = $a + $b;
    echo $a."</br>";
    $a += $b;
    echo $a."</br>";
    $a -= $b;
    echo $a."</br>";
    echo "</br>";



    // ! 3 - Comparison

    $a = 20;
    $b = 10;

    $result = ($a == $b);
    echo var_dump($result)."</br>";            // false

    $result = ($a != $b);
    echo var_dump($result)."</br>";            // true

    $result = ($a > $b);
    echo var_dump($result)."</br>";            // true

    $result = ($a < $b);
    echo var_dump($result)."</br>";            // false

    $result = ($a >= $b);
    echo var_dump($result)."</br>";            // true

    $result = ($a <= $b);
    echo var_dump($result)."</br>";            // false

    echo "</br>";



    // TODO 4 - Logical

    $age = 20;
    $graduation = "University";

    $result = ($age >= 18);
    echo var_dump($result)."</br>";
    $result = ($graduation == "Master's Degree");
    echo var_dump($result)."</br>";


    $result = ($age == 20 and ($graduation == "University" and $graduation == "Primary School"));
    echo var_dump($result)."</br>";

    
    $result = ($age == 20 and ($graduation == "University" or $graduation == "Primary School"));
    echo var_dump($result)."</br>";

?>