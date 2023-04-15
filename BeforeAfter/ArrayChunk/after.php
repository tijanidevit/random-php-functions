<?php
    $chunkedArray = array_chunk(generateArray(), 5);

    echo json_encode($chunkedArray); //[[413,266,650,518,187],[363,469,181,846],[222,147,482,205],[215,247,419,115],[914,905,195,413],[648,263,638,703]]

    function generateArray()
    {
        $generatedArray = [];
        for ($i=0; $i < 40; $i++) { 
            array_push($generatedArray, rand(100,999));
        }
        return $generatedArray;
    }
