<?php

// 2 arrays e vamos verificar os numeros em comum

$arr0 = array(0, 1, 3, 4, 5, 7, 8, 9);
$arr1 = array(1, 4, 23, 34, 45, 7);

//Rodar um looping e verficar se existe em um e no outro.

for ($i = 0; $i < count($arr0); $i++) {
    for ($j = 0; $j < count($arr1); $j++) {
        if ($arr0[$i] === $arr1[$j]) {
            echo "Esse número é igual: " . $arr1[$j] . " ao ". $arr0[$i]. "<br/>";
        } else {
            continue;
        }
    }
}

?>