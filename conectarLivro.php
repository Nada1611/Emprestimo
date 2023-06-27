<?php
include_once 'conecta.php';
// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $id_area = $_POST["id_area"];

    $sql = "INSERT INTO livro (titulo, status, autor, id_area) 
            VALUES ('$titulo', 0, '$autor', '$id_area')";

    $res = mysqli_query($con, $sql);
    
    mysqli_close($con);
}
?>