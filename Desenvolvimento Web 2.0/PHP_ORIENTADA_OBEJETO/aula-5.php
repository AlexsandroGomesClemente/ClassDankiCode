<?php 

//Aulas de interfaces

interface TesteInterface{
    public function getNome();

    public function setNome($nome);
}

class Website implements TesteInterface {
public function setNome($nome){
    echo $nome;
}
public function getNome(){
    return $this->setNome('Alex');
}

}

$teste = new Website();

$teste->getNome();
?>