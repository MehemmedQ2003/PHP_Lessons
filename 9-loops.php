<?php

    // TODO For

    for( $i = 0; $i <= 10; $i++ ){
        echo $i." ";
    }

    echo "</br>";
    echo "</br>";

    for($a = 10; $a > 0; $a--){
        echo $a." ";
    }
    
    echo "</br>";
    echo "</br>";

    for($a = 1; $a < 20; $a++){
        if($a % 2 == 1){
            echo $a." ";
        }
    }
    
    echo "</br>";
    echo "</br>";


    $names = ["Mehemmed", "Metin", "Musa", "Isa", "Adam", "Ibrahim", "Isamil", "Nuh"];
    for( $i = 0; $i < count($names); $i++ ){
        echo $names[$i]."</br>";
    }

    
    echo "</br>";
    echo "</br>";


    $products = [
        ["iphone 11", 1100],
        ["iphone 12", 1200],
        ["iphone 13", 1300]
    ];
    for( $i = 0; $i < count($products); $i++ ){
        echo $products[$i][0]." - ".$products[$i][1]."</br>";
    }


    echo "</br>";
    echo "</br>";

    
    // ! Foreach

    foreach($names as $name){
        echo $name."</br>";
    }

?>