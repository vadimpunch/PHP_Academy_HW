<?php
$numb = $_GET['number'];
if(is_numeric($numb))
{
    echo "It`s  a nomber!";
    $result = 0;
    $numb = (integer) $numb;

    if ($numb>10&&$numb<100)
    {
        $dozens = $numb / 10;
        $dozens = (integer)$dozens;
        $units-=($dozens * 10);
        $result = $dozens + $units;
        echo "The amount   digits of you number is {$result} ";

    }

    if ($numb>100&&$numb<1000)
    {
        $hundred=$numb/100;
        $hundred=(integer)($hundred);
        $numb-=$hundred*100;
        $dozens = $numb / 10;
        $dozens = (integer)$dozens;
        $units = $numb - ($dozens * 10);
        $result = $dozens + $units + $hundred;
        echo "The amount   digits of you number is {$result} ";
    }

    if ($numb>1000&&$numb<10000)
    {
        $thouth = $numb/1000;
        $thouth = (integer) $thouth;
        $numb-=$thouth*1000;
        $hundred=$numb/100;
        $hundred=(integer)($hundred);
        $numb-=$hundred*100;
        $dozens = $numb / 10;
        $dozens = (integer)$dozens;
        $units = $numb - ($dozens * 10);
        $result = $dozens + $units + $hundred + $thouth;
        echo "The amount   digits of you number is {$result} ";

    }

    if ($numb>10000&&$numb<100000)
    {
        $dozenthouth = $numb/10000;
        $dozenthouth = (integer) $dozenthouth;
        $numb -= $dozenthouth*10000;
        $thouth = $numb/1000;
        $thouth = (integer) $thouth;
        $numb-=$thouth*1000;
        $hundred=$numb/100;
        $hundred=(integer)($hundred);
        $numb-=$hundred*100;
        $dozens = $numb / 10;
        $dozens = (integer)$dozens;
        $units = $numb - ($dozens * 10);
        $result = $dozens + $units + $hundred + $thouth + $dozenthouth;
        echo "The amount   digits of you number is {$result} ";

    }
    if ($numb<0 || $numb>100000)
    {echo 'Uncorrect number!!!!';}
}
else echo "It`s not a nomber!";






