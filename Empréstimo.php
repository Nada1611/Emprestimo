<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empréstimo</title>
    <link rel="stylesheet" href="Estilos.css">
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


<form name="formEmp" method="post" action="conclusaoEmp.php">

  <legend>Empréstimo</legend>
 
  Aluno: <select class="campos" name="nome"><br>


<?php

$sql ="SELECT * FROM aluno";
$res = mysqli_query($con , $sql);

while ($reg = mysqli_fetch_array($res)) {
  echo "<option value='".$reg['matricula']."'>";
  echo $reg['nome'];
  echo "</option>";
  
}  

?>

</select>

<label>Data Para Entregar:</label>
<input class="campos" type="date" name="data_entrega"><br>

<label>Livros Disponiveis:</label><br>

</form>


<?php

$sql = "SELECT * FROM livro WHERE status = '1'";
$res = mysqli_query($con , $sql);

while ($reg = mysqli_fetch_array($res))

{

echo "input type='checkbox' name='lista[]' 
value='".$reg['id_livro']."'/>";

echo $reg['titulo'] . "<br/>";

}
?>


<input class="botao" type="submit" name="botao" value="Concluir">
<input class="botao" type="submit" name="botao" value="Cancelar">



</body>
</html>