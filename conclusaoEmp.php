<?php

include_once 'conecta.php';

$aluno = $_POST['nome'];
$data = $_POST['data_entrega'];

for($i = 0; $i < sizeof($_POST['lista']); $i++){ 
$id_livro = $_POST['lista'][$i];

$sql = "INSERT INTO reserva
(matricula, id_livro, data_retirada, 
data_entrega, status)
VALUES ('$aluno' , '$id_livro' , now(), '$data_entrega', '1')";

$res = mysqli_query($con , $sql);

if($res){

    $sql = "UPDATE livro SET status = '0' WHERE id_livro = '$id_livro'";
    $res = mysqli_query($con , $sql);
    }
}
    if($res){

echo"Empréstimo Bem Sucedido!";

    } else {

echo "Falha De Empréstimo!";

    }

    mysqli_close($con);

    header('location: Empréstimo.php');

    ?>
