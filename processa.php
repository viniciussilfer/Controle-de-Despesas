<?php

include_once("conexao.php");

$descricao = $_POST["despesa"];
$valor = $_POST["valor"];
$status = $_POST["status"];
$dia = $_POST["dia"];
$mes = $_POST["mes"];
$ano = $_POST["ano"];

$sql = "insert into despesas (despesa, valor, condicao, dia, mes, ano) values ('$descricao', '$valor', '$status', '$dia', '$mes', '$ano')";

$salvar = mysqli_query($conexao, $sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);

?>		

<!-- HTML -->


<!-- html -->
<!DOCTYPE html>
<html>

<head>
	<title>Cadastro</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

	<div class="cabecalho">
		
		<h1 class="tc">CONTROLE DE DESPESAS</h1>
		<a href="index.php">Cadastro</a> |
		<a href="consulta.php">Consultas</a>

	</div>

	<div class="container">
		

		<h1>Despesa adicionada com sucesso</h1>




	</div>

	<div class="rodape">

		<h6>Todos os direitos reservados</h6>
		Welington V. Silfer | Suporte: (61) 9 9672-6708		

	</div>

</body>
</html>