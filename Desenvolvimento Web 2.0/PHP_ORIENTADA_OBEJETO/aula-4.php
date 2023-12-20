<?php 
// Aula de classe abstratas
// Ela não pode ser instaciada apenas herdada;
// Só poder extends 

abstract class Teste {

    public function teste(){
        echo "Teste";
    }
}

class Website extends Teste{

}

$webSite = new Website();

$webSite->teste();

?>