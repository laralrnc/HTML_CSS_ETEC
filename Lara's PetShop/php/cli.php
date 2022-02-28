<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8"/>
<Title>Cadastro</title>
<link rel="stylesheet" type="text/css" media="screen" href="../css/estilo1.css"/>
</head>
<body>
<center>
<h1>Listagem de Usuários Cadastrados</h1>
<p></p>
<p></p>
<?php 
$nome = $_POST["nome"];
$end = $_POST["end"];
$bairro = $_POST["bairro"];
$cid = $_POST["cid"];
$est = $_POST["est"];
$tel = $_POST["tel"];
$cel = $_POST["cel"];
$cpf = $_POST["cpf"];
$ani = $_POST["ani"];
?>

<table border="1">
<tr>
<td>Nome</td>
<td>Endereço</td>
<td>Bairro</td>
<td>Cidade</td>
<td>Estado</td>
<td>Telefone</td>
<td>Celular</td>
<td>CPF</td>
<td>Animal</td>
</tr>
<tr>
<td><?php echo"$nome";?></td>
<td><?php echo"$end";?></td>
<td><?php echo"$bairro";?></td>
<td><?php echo"$cid";?></td>
<td><?php echo"$est";?></td>
<td><?php echo"$tel";?></td>
<td><?php echo"$cel";?></td>
<td><?php echo"$cpf";?></td>
<td><?php echo"$ani";?></td>
</tr>
</table>
</center>
</body>
</html>