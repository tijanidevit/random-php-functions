<?php
    $start_time = microtime(true);
    $numbers = [1,2,3,4,5,6,7,8,9,10];
    
    in_array(7, $numbers); //true
    in_array(77, $numbers); //false

    $end_time = microtime(true);

    $execution_time = ($end_time - $start_time);

    echo "Execution time of the function: " . $execution_time . " seconds";