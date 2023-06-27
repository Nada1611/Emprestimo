<?php
include_once'conecta.php';

$sql = "SELECT * FROM area ORDER BY id DESC";

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


<th scope="col">Id</th>
<th scope="col">Nome</th>

</tr>

<?php

while($dados = mysqli_fetch_assoc($res))

{

echo "<tr>";

echo "<td>" .$dados['id']."/td>";
echo "<td>" .$dados['nome']."/td>";
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