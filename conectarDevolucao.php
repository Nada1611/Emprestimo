<?php

include_once'conecta.php';

for($i = 0; $i < sizeof($_POST['lista']); $i++){

    $id_reserva = $_POST['lista'][$i];

    $sql = "UPDATE reserva SET status = '0' WHERE id_reserva = '$id_reserva'";
    $res = mysqli_query($con , $sql);

    if($res){

    $sql = "UPDATE livro l INNER JOIN reserva r ON r.id_livro SET l.status = '1' WHERE id_reserva = '$id_reserva'";
    $res = mysqli_query($con , $sql);
    }
} 

mysqli_close($con);
header('location: Devolucao.php');

?>