<?php

$user =  [
    "id" => 1,
    "name" => "Tijani",
    "age" => 10,
    "club" => "Arsenal",
];
extract($user);

echo "$id, $name, $age, $club\n";

?>