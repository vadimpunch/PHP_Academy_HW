<?php

$simpleNumbers = [];
$conclusion = 'simple';

for ($i=2; $i<=100; $i++){
    for ($j=2; $j<$i; $j++){
        if (($i%$j)==0){
            $conclusion = 'not simple';
        }

    }
    if ($conclusion == 'simple'){
        $simpleNumbers[] = $i;
    }
else $conclusion = 'simple';

}
print_r($simpleNumbers);