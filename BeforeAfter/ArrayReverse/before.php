<?php
    $numbers = [1,2,3,4,5,6,7,8,9,10];

    $len = count($numbers);
    
    for ($i = $len -1; $i > -1; $i--) { 
        $numbers[$len - $i] = $numbers[$i];
    }

    echo json_encode($numbers);

    