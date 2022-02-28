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
$endereco = $_POST["endereco"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$tel_resi = $_POST["residencial"];
$celular = $_POST["celular"];
$cpf = $_POST["cpf"];
$animal = $_POST["animal"];

$sql ->query("insert into cad_prop(codigo,nome,endereco,bairro,cidade,estado,tel_resi,celular,cpf,animal) 
values(null,'$nome','$endereco','$bairro','$cidade','$estado','$tel_resi','$celular','$cpf','$animal')");
echo "salvo com sucesso"
?>

</center>
</body>
</html>