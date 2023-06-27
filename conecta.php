<?php



$server ="localhost";
$usuario = "root";
$senha = "";
$bd = "biblioteca_trabalho";

$con = mysqli_connect($server , $usuario , $senha , $bd);

if (!$con) {

    die("Falha na Conexão");

} 

?>