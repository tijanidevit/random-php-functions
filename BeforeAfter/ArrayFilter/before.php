<?php
    $numbers = [1,2,3,4,5,6,7,8,9,10];
    $evenNumbers = [];

    foreach ($numbers as $number ) {
        if ($number %  2  == 0) {
            array_push($evenNumbers, $number);
        }
    }

    print_r($evenNumbers); //[2,4,6,8,10]