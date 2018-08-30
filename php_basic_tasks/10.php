<?php
$number=rand(1,10);
switch ($number)
{
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Это рабочий день";
        break;
}
echo '<br>';
var_dump($number);