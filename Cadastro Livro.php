
<?php 
include_once 'conecta.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Livros</title>
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


        

  <form action="conectarLivro.php" method="POST">
            <fieldset class="livros">
            <legend>Cadastro Do Livro:</legend>
    <label for="titulo">Título:</label>
    <input type="text" id="titulo" name="titulo" required>

    <label for="autor">Autor:</label>
    <input type="text" id="autor" name="autor" required>
    

    <label for="id_area">Área de Conhecimento:</label>
    <select id="id_area" name="id_area" required>
      <option value="">Selecione a área de conhecimento</option>
      </select>
      <input type="submit" name="botao" value="Cadastrar">
<input type="reset" name="btn" value="Limpar">
</fieldset>
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
      
      
    
          


      
    
      
</form>
</html>