<?php
    $numbers = [1,2,3,4,5,6,7,8,9,10];
    $len = count($numbers);

    $reversed_numbers = [];

    for ($i = $len - 1; $i >= 0; $i--) { 
        $reversed_numbers[] = $numbers[$i];
    }

    echo json_encode($reversed_numbers); //[10,9,8,7,6,5,4,3,2,1]

    