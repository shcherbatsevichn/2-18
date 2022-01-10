<?php error_reporting(-1);
//В массиве А(N) подсчитать количество различных элементов.  
$A = [1, -7, -4, 2, -7, 2, 3, 3, -199, 4, 1, 4, -20, 6, 6, 3, -4, 13, 99];


echo("A(n):<br>");
print_r($A);
echo("<br>Result:<br>");
$a = count_diff_elem($A);
echo("В массиве А(N) {$a} различных элементов");

function count_diff_elem($array){
    $countres = 1;
    sort($array);
    for($i = 0; $i < count($array); $i++){
        if($array[$i] != $array[$i+1] && $i+1 < count($array)){
            $countres++;
        }
    }
    return $countres;
}        

