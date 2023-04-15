<?php
    $student = [
        'name' => 'Mustapha',
        'studentID' => 711,
        'class' => "SS3"
    ];


    $teacher = [
        'name' => 'Tijani',
        'teacherID' => 711,
        'class' => "JS2",
        'salary' => 100000,
    ];
    
    var_dump(array_diff_key($student, $teacher));
    ?>