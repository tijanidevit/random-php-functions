<?php
    $numbers = [1,2,3,4,5,6,7,8,9,10];

    function addNumber(&$number)
    {
        if ($number %2 == 0)
            $number += 100;
        else
            $number += 200;
    }

    array_walk($numbers, 'addNumber');

    echo json_encode($numbers); //[201,102,203,104,205,106,207,108,209,110]