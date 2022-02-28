<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8"/>
<Title>Cadastro</title>
<link rel="stylesheet" type="text/css" media="screen" href="../css/estilo1.css"/>
</head>
<body>
<h1>Listagem de Usuários Cadastrados</h1>
<?php 
$nome = $_POST["nome"];
$raca = $_POST["raca"];
$idade = $_POST["idade"];
$porte = $_POST["por"];
$prop = $_POST["prop"];

echo"$nome";
echo"$raca";
echo"$idade";
echo"$porte";
echo"$prop";
?>
<table border="1">
<tr>
<td>Nome</td>
<td>Raça</td>
<td>Idade</td>
<td>Porte</td>
<td>Nome do Proprietário</td>
</tr>

<tr>
<td><?php echo"$nome";?></td>
<td><?php echo"$raca";?></td>
<td><?php echo"$idade";?></td>
<td><?php echo"$porte";?></td>
<td><?php echo"$prop";?></td>
</tr>
</table>

</body>
</html>