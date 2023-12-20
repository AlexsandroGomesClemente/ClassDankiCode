<?php 

/* Como criar uma class em php

*/
class Aula 
{   
    // Métodos e atributos.
    public $nome = "Carol";

    //Método construtor não é necessario em uma class
    public function __construct(){
        echo "Ola teste";
    }

    public function printNome(){
        return 'Alex';
    }
}

$alex = new Aula();

echo $alex -> printNome();
echo $alex -> nome;
?>