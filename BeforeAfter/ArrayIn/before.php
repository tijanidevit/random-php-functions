<?php
    $numbers = [1,2,3,4,5,6,7,8,9,10];
    
    checkIsInArray($numbers,7); //true
    checkIsInArray($numbers,77); //false

    function checkIsInArray($array,$value)
    {
        foreach ($array as $item) {
            if ($item == $value) {
                return true;
            }
        }
        return false;
    }

    echo '<br />';