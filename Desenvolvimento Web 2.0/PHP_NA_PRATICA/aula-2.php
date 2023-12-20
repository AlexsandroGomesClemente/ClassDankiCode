<?php
/*
 Para criar um array vc chama 
 como se fosse uma function
 => serve para nomear um indici

 foreach usado para percorrer todo o array de forma simples

 for para fazer loops convencionais

 while($i < 10){

    $i++ para inclementar e não entrar em loop infinito
 }

*/
$nome = array('nome1' => "Alex", "Ravena");

foreach ($nome as $key => $value) {
    echo $key;
}

for ($i = 0; $i < sizeof($nome); $i++) { 
    echo $i;
    echo"</br>";
}
print_r($nome);

?>