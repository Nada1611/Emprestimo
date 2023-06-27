
<?php
include_once "conecta.php";


if (isset($_GET['id'])) {
  $id = $_GET['id'];


  $sql = "DELETE FROM livro WHERE id = '$id'";


if (mysqli_query($con, $sql)) 
{
    echo "Livro excluído com sucesso!";
  
} else {
    
    echo "Erro ao excluir o livro! " . mysqli_error($con);
  
}
} else {
 
    echo "ID do livro não conhecido!";
}

mysqli_close($con);
?>
</body>
</html>