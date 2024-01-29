<?php

    // $numbers = ["20", "30", "40"];
    // $students = ["Muhammed", "Metin", "Musa"];

    $students_point = [
        "20" => "Muhammed",
        "30" => "Metin",
        "40" => "Musa",
    ];
    echo $students_point["20"]."</br>";
    echo $students_point["30"]."</br>";
    echo $students_point["40"]."</br>";


    echo "</br>";


    $telephone_number = [
        "Muhammed" => "+994 55 - 713 - 52 - 90",
        "Metin" => "+994 70 - 929 - 60 - 46",
    ];
    echo $telephone_number["Muhammed"]."</br>";
    echo $telephone_number["Metin"]."</br>";

    
    echo "</br>";


    $products = [
        [
            "productName" => "XIOMI 12",
            "price" => 1200,
            "isSale" => true
        ],
        [
            "productName" => "Iphone 13 Pro max",
            "price" => 3500,
            "isSale" => false
        ],
        [
            "productName" => "Samsun S21",
            "price" => 2400,
            "isSale" => true
        ]
    ];

    echo $products[0]["productName"]." - ".$products[0]["price"]." - ".$products[0]["isSale"]."<br/>";
    echo $products[1]["productName"]." - ".$products[1]["price"]." - ".$products[1]["isSale"]."<br/>";
    echo $products[2]["productName"]." - ".$products[2]["price"]." - ".$products[2]["isSale"]."<br/>";
?>