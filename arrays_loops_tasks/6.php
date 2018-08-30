<?php
$arr=['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];
$en=[];
$ru=[];
$i=0;
foreach ($arr as $key=> $value)
{
    $en[$i]=$key;
    $ru[$i]=$arr[$key];
    $i++;

}

print_r($arr);
echo '<br>';
print_r($en);
echo '<br>';
print_r($ru);


