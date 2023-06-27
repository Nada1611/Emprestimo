<?php
session_start();
include_once'conecta.php';
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true ))

{

unset($_SESSION['email']);
unset($_SESSION['senha']);
header('Location: ListarAlunos.php');

}
$logado = $_SESSION['email'];

$sql = "SELECT * FROM aluno ORDER BY id DESC";

$res = $con->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela</title>
    <link rel="stylesheet" href="Tabela.css">
</head>
<body>
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
                  <a href="Empréstimo.php">Empréstimo</a><br>
                  <a href="Devolução.php">Devolução</a><br>
                    </div>
                    </li>
                      
                      </ul>
          
               </nav>

             <div>
<table class="tabela">

<tr>

<th scope="col">Matrícula</th>
<th scope="col">Nome</th>
<th scope="col">Email</th>
<th scope="col">Cpf</th>
<th scope="col">Data Nasc</th>
<th scope="col">Ações</th>

</tr>

<?php

while($dados = mysqli_fetch_assoc($res))

{

echo "<tr>";
echo "<td>" .$dados['matrícula']."/td>";
echo "<td>" .$dados['nome']."/td>";
echo "<td>" .$dados['email']."/td>";
echo "<td>" .$dados['cpf']."/td>";
echo "<td>" .$dados['Data Nasc']."/td>";
echo "<td>" .$dados['...']."/td>";

echo "</tr>";

}

?>

</table>
</div>
</body>
</html>
