<?php
$number=rand(1,10);
switch ($number)
{
    case 6:
    case 7:
        echo "Это выходной день";
        break;
}echo '<br>';
var_dump($number);