<?php
include_once'conecta.php';

$sql = "SELECT * FROM livro ORDER BY id DESC";

$res = $con->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Livros</title>
</head>
<body>
<div>
<table class="tabela">

<tr>

<th scope="col">Autor</th>
<th scope="col">Id</th>
<th scope="col">Id_area</th>
<th scope="col">Status</th>
<th scope="col">Titulo</th>
<th scope="col">Ações</th>

</tr>

<?php

while($dados = mysqli_fetch_assoc($res))

{

echo "<tr>";
echo "<td>" .$dados['autor']."/td>";
echo "<td>" .$dados['id']."/td>";
echo "<td>" .$dados['id_area']."/td>";
echo "<td>" .$dados['status']."/td>";
echo "<td>" .$dados['titulo']."/td>";
echo "<td>"['...']."/td>";

echo "</tr>";

}

?>

</table>
</div>
</body>
</html>

</body>
</html>