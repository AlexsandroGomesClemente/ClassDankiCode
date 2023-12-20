<?php 

//Extends serve para juntar duas classes
// parent:: consegue chamar qualquer function dentro da classe filho


class App {
    public function runApp(){
        echo"rodou o app";
    }
}

class DankiCode extends App
{

}

$dankiCode = new DankiCode();  
$dankiCode->runApp();

?>