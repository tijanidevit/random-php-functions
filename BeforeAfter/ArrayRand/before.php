<?php
    $numbers = [1,2,3,4,5,6,7,8,9,10];
    
    $randomKey = rand(0, count($numbers));

    echo $numbers[$randomKey]; //2