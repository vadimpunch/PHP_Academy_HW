<?php
$a=$_POST['number1'];
$b=$_POST['number2'];
$operation=$_POST['operation'];

switch ($operation)
{
    case '+':
        $result=$a+$b;
        echo "$result";
        break;
    case '-':
        $result=$a-$b;
        echo "$result";
        break;
    case '*':
        $result=$a*$b;
        echo "$result";
        break;
    case '/':
        $result=$a/$b;
        if($b==0){echo "На ноль делить нельзя";};
        echo "$result";
        break;
    case '%':
        $result=$a%$b;
        echo "$result";
        break;
}
?>
