<?php
$arr = array_fill(1, 100, rand(1,100));
foreach ($arr as &$val)
{
    $val = rand(1,100);
}
print_r($arr);
echo "<br>";
$composition=1;
foreach ($arr as $key => $value)
{

    if ($value>0 && ($key%2==0))
    {
        $composition*=$value;

    }
}
echo "Composition of paired elements =  $composition";
echo "<br>";

echo " Not paired elements:<br>";
foreach ($arr as $key => $value) {

    if ($value > 0 && ($key % 2 !== 0)) {
        echo "{$value},";

    }
}
