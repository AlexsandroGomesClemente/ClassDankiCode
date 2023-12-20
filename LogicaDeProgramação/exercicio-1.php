<?php
@$numberA = $_POST['numberA'];
@$numberB = $_POST['numberB'];
@$numberC = $_POST['numberC'];
function sum($numberA, $numberB)
{
    $resultSum = $numberA + $numberB;
    echo 'A soma deu:' . $resultSum; 
    echo "</br>";
    return $resultSum;
}
function compare($result, $numberVerify)
{
    if ($result > $numberVerify) {
        echo 'O valor das somas é maior que o número ' . $numberVerify;
    }

    if ($result < $numberVerify) {
        echo 'O valor das somas é menor que o número ' . $numberVerify;
    }
}

$result = sum($numberA, $numberB);
compare($result, $numberC);

?>

<form method="POST">
    <label>Number A</label>
    <input type="number" name="numberA" /> </br>
    <label>Number B</label>
    <input type="number" name="numberB" /></br>
    <label>Number C</label>
    <input type="number" name="numberC" /></br>
    <input type="submit" name="send" />
</form>