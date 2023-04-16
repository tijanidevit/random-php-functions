<?php
    $numbers = generateArray();
    
    $chunkedArray = [];
    $chunk = [];
    $sn = 1;
    
    foreach ($numbers as $number) {
        if ($sn % 6 == 1 && $sn > 4) {
            $chunk = [];
        }
        else if ($sn % 6 == 0) {
            $chunkedArray[] = $chunk;
        }
        else{
            array_push($chunk, $number);
        }

        $sn +=1;
    }

    echo json_encode($chunkedArray); //[[572,369,369,408,458],[715,321,106,701],[130,486,836,529],[458,952,755,489],[639,525,186,841],[673,133,562,107]]

    function generateArray()
    {
        $generatedArray = [];
        for ($i=0; $i < 40; $i++) { 
            array_push($generatedArray, rand(100,999));
        }
        return $generatedArray;
    }
