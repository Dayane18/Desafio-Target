<?php

$num = 13; // número que será verificado na sequência de Fibonacci

$a = 0;
$b = 1;
$c = 0;

while($c < $num){
    $c = $a + $b;
    $a = $b;
    $b = $c;
}

if($c == $num){
    echo $num . " pertence à sequência de Fibonacci";
} else {
    echo $num . " não pertence à sequência de Fibonacci";
}

?>


