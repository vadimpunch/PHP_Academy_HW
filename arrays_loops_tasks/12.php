<?php
//Дано число $n = 1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50. Какое число получится?
// Посчитайте количество итераций, необходимых для этого (итерации — это количество проходов цикла), и запишите его в переменную $num.
$n=1000;
$num=0;

do
{
    $result=$n/2;
    $n=$result;
    $num++;
}
while($n>50);
echo "$result \n Количество итерации: {$num} \n <br>";


