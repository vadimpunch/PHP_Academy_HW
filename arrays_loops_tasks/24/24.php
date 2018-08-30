<?php
$arr = $_GET['number'];
$arr=str_split($arr);
$val = $_GET['value'];

if (in_array($val,$arr)) {
    foreach ($arr as $mean) {
        if ($val == $mean) {
            $count++;
        }
}
echo "In this number {$val} repeated {$count} times!";
}

else echo "Value is absent in this number ";

