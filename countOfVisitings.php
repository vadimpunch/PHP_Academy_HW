<?php

$count = isset($_COOKIE['count']) ? (int)$_COOKIE['count'] + 1 : 0;

setcookie('count', $count, time()+60*60*24*366);

echo $count;