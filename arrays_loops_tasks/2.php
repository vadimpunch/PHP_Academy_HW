<?php
// Дан массив с элементами 1, 20, 15, 17, 24, 35.
// С помощью цикла foreach найдите сумму элементов этого массива. Запишите ее в переменную $result.
$mass=[1, 20, 15, 17, 24, 35];
$result=0;
foreach ($mass as $val)
{

    $result+=$val;

}
echo  "<br> $result";