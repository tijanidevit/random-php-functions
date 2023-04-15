<?php
    $numbers = [1,2,3,4,5,6,7,8,9,10];
    $ages = [1,21,32,4,5,66,7,8,9,21];

    $differences = array_diff($numbers, $ages);

    echo json_encode($differences); //[2,3,6,10]