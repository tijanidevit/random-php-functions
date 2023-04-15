<?php
    $numbers = [1,2,3,4,5,6,7,8,9,10];

    $evenNumbers = array_filter($numbers, function ($number)
    {
        return $number %  2  == 0;
    });

    echo json_encode($evenNumbers); //[2,4,6,8,10]
