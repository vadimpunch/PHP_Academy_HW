<?php
$mass=[ 26, 17, 136, 12, 79, 15];
$result=0;
foreach ($mass as $val)
{

    $result+=pow($val,2);

}
echo  "<br> $result";