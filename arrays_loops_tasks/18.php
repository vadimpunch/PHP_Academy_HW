<?php

$arr = array('Mon','Tue','Wed','Thu','Fri','Sut','Sun');

foreach ($arr as $key=>$val)
{
    if ($key>4){$val="<b>{$val}</b>";}
    echo "$val \n";
}