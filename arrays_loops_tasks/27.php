<?php
$row=rand(1,20);
$cols=rand(1,20);
$colors = array('red','yellow','blue','gray','maroon','brown','green');
$val=rand(100, 1000);
echo "<table border='1'>";
$rand_color=$colors[rand(1,7)];
for ($i=1; $i<$row; $i++)
{
    echo "<tr>";
    for($j=1; $j<$cols; $j++)
    {
        $rand_color=$colors[rand(1,7)];
        $val=rand(100, 1000);
        echo "<td bgcolor='{$rand_color}'>{$val}</td>";

    }

echo "</tr>";
}

echo"</table>";