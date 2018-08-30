<?php
$arr = array_fill(0, 10, rand(1,100));


foreach ($arr as &$val)
{
     $val = rand(1,10);
}
print_r($arr);
    echo "<br>";
$max = 0;
$min = 100;
foreach ($arr as  $val) {
    if ($val > $max) {
        $max = $val;
    }
}
foreach ($arr as  $valmin)
{
    if ($valmin < $min)
    {
        $min = $valmin;
    }
}
echo "Max value = ".$max."<br>";
echo "Min value = ".$min."<br>";
$maxkey = array_search($max, $arr);
$minkey = array_search($min, $arr);

$arr[$maxkey] = $min;
$arr[$minkey] = $max;
print_r($arr);


