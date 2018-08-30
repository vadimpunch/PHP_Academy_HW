<?php
$i=1;
$j=1;
$multi=0;
echo "<table border='1'> ";
for ($i=1; $i<=10; $i++)
{   echo "<tr>";
    for ($j=1;$j<=10; $j++)
    {

        $multi=$i*$j;
        echo "<td> \n {$multi} \n</td>";

    }
    echo "</tr>";
}
