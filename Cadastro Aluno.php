<?php
include_once 'conecta.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Alunos</title>
    <link rel="stylesheet" href="Estilos.css">

</head>

<nav class="menu_aluno">
                  
                  <ul>

                  <li>
                    <a href="index.html">Home</a>
                    </li>
                  <li class="dropdown">
                    <a>Cadastros</a>
                  <div class="dropdown-menu">
                  <a href="Cadastro Aluno.php">Alunos</a><br>
                  <a href="Cadastro Livro.php">Livros</a><br>
                  <a href="Cadastro Area.php">Área</a><br>
                    </div>
                </li>
                    <li class="dropdown">
                    <a>Livros</a>
                    <div class="dropdown-menu">
                <a href="ListarLivros.php">Lista de Livros</a><br>
                <a href="ListarAlunos.php">Lista de Alunos</a><br>
                <a href="ListarAreas.php">Lista de Áreas</a><br>
                  <a href="Empréstimo.php">Empréstimo</a><br>
                  <a href="Devolução.php">Devolução</a><br>
                    </div>
                    </li>
                      
                      </ul>
          
               </nav>

<fieldset class="form">

        <legend>Cadastro Aluno:</legend>

        <body>
        <form action="conectarAluno.php" method="post">
                <label>Nome:<input type="nome" placeholder="Digite seu Nome:" name="nome"></label><br>
                <label>Email:<input type="email" placeholder="Digite seu Email:"  name="email"></label><br>
                <label>Cpf:<input type="cpf" placeholder="Digite seu Cpf:" name="cpf"></label><br>
                <label>Data Nasc:<input type="date" name="data_nasc"></label><br>
                <br>
                <input type="submit" value="Cadastrar">
                </form>
            </fieldset>
    </body>
</html>