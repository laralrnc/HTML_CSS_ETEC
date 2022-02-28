<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8"/>
<Title>Cadastro</title>
<link rel="stylesheet" type="text/css" media="screen" href="../css/css.css"/>
</head>
<body>
<center>

<p></p>
<p></p>
<?php 
include "conexao.php";
$nome = $_POST["nome"];
$raca = $_POST["raca"];
$idade = $_POST["idade"];
$porte = $_POST["porte"];
$nomep = $_POST["dono"];

$sql ->query("insert into cad_animal(codigo,nome,raca,idade,porte,nomep) 
values(null,'$nome','$raca','$idade','$porte','$nomep')");
echo "salvo com sucesso"
?>

</center>
</body>
</html>