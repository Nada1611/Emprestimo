<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexão Área</title>
</head>
<body>
    
<?php
include_once 'conecta.php';
// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //$id_area = $_POST["id_area"];
    $nome = $_POST["nome"];

    $sql = "INSERT INTO area (nome) 
            VALUES ( '$nome')";

    $res = mysqli_query($con, $sql);
    
    mysqli_close($con);
}
?>
</body>
</html>