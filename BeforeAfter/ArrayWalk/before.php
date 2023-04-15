<?php
    $numbers = [1,2,3,4,5,6,7,8,9,10];

    for($i = 0; $i < count($numbers); $i++) {
        $numbers[$i] = addNumber($numbers[$i]);
    }

    function addNumber($number)
    {
        if ($number %2 == 0) {
            return $number + 100;
        }
        return $number + 200;
    }

    echo json_encode($numbers); //[201,102,203,104,205,106,207,108,209,110]