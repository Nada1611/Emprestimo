<?php

include_once 'conecta.php';


    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
    $data_nasc = $_POST["data_nasc"];

    $sql = "INSERT INTO aluno (nome , email , cpf , data_nasc)
    VALUES ('$nome' , '$email' , '$cpf', '$data_nasc')";
    echo $sql;

    $res = mysqli_query($con , $sql);
    mysqli_close($con);


?>
    