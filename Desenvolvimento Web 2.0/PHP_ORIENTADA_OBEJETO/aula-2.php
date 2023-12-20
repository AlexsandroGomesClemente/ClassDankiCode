<?php 

class DankiCode 
{
    // Sobre static private e public

    // $this faz a referencia a classe
    // private é algo que só pode ser usado dentro do escopo da class
    // com static posso chamar a function passando ClassName::
    // self:: faz referencia as variaves statics


    public static function printName () {
        echo "Alex";
    }

    private function printNome() {
        echo "Privado Function";
    }

}

$dankiCode = new DankiCode();
DankiCode::printName();


?>