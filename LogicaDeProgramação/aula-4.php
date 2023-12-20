<?php
$arr0 = array("alex", "carol", "teste",'alex');
$arrRep = array();

for ($i = 0; $i < count($arr0); $i++) {

    $valorAtual = $arr0[$i];
    if (!isset($arrRep[$valorAtual])) {
        $arrRep[$valorAtual] = 0;
    } else {
        $arrRep[$valorAtual]++;
    }

}

foreach ($arrRep as $key => $value) { 
    echo "Nome: ". $key ." Quantidade: ". $value;
    echo "<hr/>";
};


?>