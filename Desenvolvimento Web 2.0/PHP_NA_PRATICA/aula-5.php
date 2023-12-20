<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>

<?php 
 if(isset($_POST["nome"])){
    echo $_POST["nome"];
 }

 if(isset($_GET['nome'])){
    echo $_GET['nome'];
 }

?>

<form enctype="multipart/form-data" action="" method="get">
    <input type="text" name="nome">
    <input type="submit" value="Enviar">

</form>
    
</body>
</html>