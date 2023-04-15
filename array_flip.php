<?php
$user = [
    "id" => 1,
    "name" => "Tijani",
    "age" => 10,
    "club" => "Arsenal",
];
$userFlipped = array_flip($user);

print_r($userFlipped);
// Array ( [1] => id [Tijani] => name [10] => age [Arsenal] => club )