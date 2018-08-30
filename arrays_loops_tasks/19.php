<?php
//$arr = array_fill(0, 30, ());


foreach (range(1,30, 1) as $val)
{
    if ($val==7)
    {
    $day=$val;
    $val="<i>{$val}</i>";
    }
    echo "$val \n";
}
