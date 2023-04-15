<?php
function sum($num1,$num2)
{
    return $num1+$num2;
}
$a=[10,15,20];
echo array_reduce($a,"sum",0);
//45
?>