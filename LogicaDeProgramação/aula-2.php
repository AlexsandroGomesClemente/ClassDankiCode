<?php
// 1- Verificar se tem mais de 5 letras 
// 2- Verificar se é número
// 3- Verificar se tem @

if(isset($_POST['acao'])) {
    $nome = $_POST['nome'];
    $numero = $_POST['numero'];
    $email = $_POST['email'];

    if(strlen($nome) >= 5){
        echo "O nome tem mais de 5 letras";
        echo "<br/>";
    }
   
    if(is_numeric($numero)) {
        echo "É número";
        echo "<br/>";

    } 

    if(strstr($email, "@") != '') {
        echo "Tem o @ no email";
        echo "<br/>";

    }
}

?>

<form method="post">
    <input type="text" name="nome">
    <input type="text" name="numero">
    <input type="text" name="email">
    <input type="submit" name="acao">
</form>