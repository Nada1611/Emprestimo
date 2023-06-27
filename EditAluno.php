<?php
include_once 'conecta.php';

if(!empty($_GET['nome']))

$nome = $_GET['nome'];

$sqlSelect = "SELECT * FROM aluno WHERE nome=$nome";

$res = $con->query($sqlSelect);

if($res->num_rows > 0)

{

    while($dados = mysqli_fetch_assoc($res))

    {

    $nome = $dados['nome'];
    $email = $dados['email'];
    $cpf = $dados['cpf'];
    $data_nasc = $dados['data_nasc'];
}
}
else
{
header('Location: home.php');
}


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil</title>
    <link rel="stylesheet" href="Estilos.css">
</head>
<body>
<form action="conectarLivro.php" method="POST">
            <fieldset class="livros">
            <legend>Editar Livro:</legend>
    <label for="titulo">Título:</label>
    <input type="text" id="titulo" name="titulo" required>

    <label for="autor">Autor:</label>
    <input type="text" id="autor" name="autor" required>
    

    <label for="id_area">Área de Conhecimento:</label>
    <select id="id_area" name="id_area" required>
      <option value="">Selecione a área de conhecimento</option>
        
      <?php
       
      $sql = "select * from area";
      $res = mysqli_query($con, $sql);
      while($reg = mysqli_fetch_array($res)) {
        $ida= $reg['id'];
        $nomea= $reg['nome'];
        echo "<option value='$ida'>$nomea</option>";
        //echo "</option>";
      }
      
      ?>
      
      </select>
      <input type="submit" name="botao" value="Atualizar">
<input type="reset" name="btn" value="Limpar">
            </fieldset>


      
    
      
</form>
</body>
</html>