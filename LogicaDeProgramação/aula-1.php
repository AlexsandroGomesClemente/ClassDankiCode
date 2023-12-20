<?php 
//Código PHP
$message = "Hello world!";
$olaMundo = "Olá mundo";

echo $message;
echo "<br/>";
echo $olaMundo;


$arrMessage = ["A","-","l","-","e","-","x"];
$string = "";

for( $i = 0; $i < count($arrMessage); $i++ ) {
    if ( $arrMessage[$i] == "-") {
        continue;
    }

    $string .= $arrMessage[$i];

};

echo "<br/>";
echo $string;
?>