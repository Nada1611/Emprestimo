<?php
include_once 'conecta.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devolução</title>
    <link rel="stylesheet" href="Estilos.css">
</head>
<body>
  <form method="post" action="conectarDevolucao.php">
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

               <?php

$sql = "SELECT id_area , titulo , nome, data_retirada, data_entrega
FROM reserva R
INNER JOIN aluno A ON r.id_res_matricula = a.matricula
INNER JOIN livro L ON r.id_res_livro = l.id_livro
WHERE r.status = '1'";

$res = mysqli_query($con , $sql);

while($reg = mysqli_fetch_array($res)) {

$livro = $reg['titulo'];
$aluno = $reg['nome'];
$data_retirada = $reg['data_retirada'];
$data_entrega = $reg['data_entrega'];

}

echo "<tr>";

echo "<td><input type='checkbox'
value='".$reg['id_area'].
"' name='lista[]'></td>";
echo "<td>".$livro."</td>";
echo "<td>".$aluno."</td>";
echo "<td>".$data_retirada."</td>";
echo "<td>".$data_entrega."</td>";

echo "</tr>";
echo "</table>";

?>

<form>
<legend>DEVOLVER LIVROS:</legend>
<table class="tabeladev">
<tr>
<th>LIVROS</th>
<th>ALUNOS</th>
<th>DATA/RETIRAR</th>
<th>DATA/ENTREGAR</th>
</tr>




<input class="btn" type="submit" name="botao" value="Devolver Livro">
<input class="btn" type="reset"  name="botao" value="Cancelar">



<?php
$sql = "SELECT titulo , nome , data_retirada , data_entrega
FROM reserva r
INNER JOIN aluno A ON r.id_res_matricula = a.matricula
INNER JOIN livro L ON r.id_livro
WHERE r.status = '0'";

$res = mysqli_query($con , $sql);

while($reg = mysqli_fetch_array($res)) {

$livro = $reg['titulo'];
$aluno = $reg['nome'];
$data_retirada = $reg['data_retirada'];
$data_entrega = $reg['data_entrega'];

}

echo "<tr>";


echo "<td>".$livro."</td>";
echo "<td>".$aluno."</td>";
echo "<td>".$data_retirada."</td>";
echo "<td>".$data_entrega."</td>";

echo "</tr>";
echo "</table>";


?>
</form>
</table>
</form>
</body>
</html>