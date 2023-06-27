<?php
include_once 'conecta.php';

if(!empty($_GET['id_area']))

{
    $id_area = $_GET['id_area'];

    $sqlSelect = "SELECT * FROM livro WHERE id_area=$id_area";

$res = $con->query($sqlSelect);

if($res->num_rows > 0)

{

    while($reg = mysqli_fetch_array($res)) {
        $ida= $reg['id'];
        $nomea= $reg['nome'];

}

print_r($nome);

}

else 

{

header('Location: Listarlivros.php');

}

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