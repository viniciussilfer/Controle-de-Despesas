<?php

include_once("conexao.php");

$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

$sql = "select * from despesas where mes like '%$filtro%'";
$consulta = mysqli_query($conexao, $sql);
$registros = mysqli_num_rows($consulta);

?>

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
	
		<h2>Consulta de Despesas</h2><br><br>

		<div>

			 <form method="get" action="">
			 	
			 <h5>Digite o mês que deseja consultar:</h5>

			 	<input type="text" name="filtro" class="campo" required autofocus>
			 	<input type="submit" name="envcon" value="Pesquisar" class="btn"><br><br>

			 </form>

			 <?php

			 	print "$registros despesa(s) encontrada(s) no mês de $filtro.";
			 	print "<br><br>";

			 	while ($exibirRegistros = mysqli_fetch_array($consulta)){
			 		
			 		$codigo = $exibirRegistros[0];
			 		$nome = $exibirRegistros[1];
			 		$preco = $exibirRegistros[2];
			 		$estado = $exibirRegistros[3];
			 		$diaa = $exibirRegistros[4];
			 		$mess = $exibirRegistros[5];
			 		$anno = $exibirRegistros[6];

			 		print"<article>";

			 		#print("$codigo<br>");
			 		print("Despesa: $nome<br>");
			 		print("Valor: $preco<br>");
			 		print("Status: $estado<br>");
			 		print("Dia: $diaa<br>");
			 		print("Mês: $mess<br>");
			 		print("Ano: $anno<br>");
			 		print("<br>");


			 		print "</article>";

			 	}

			 	mysqli_close($conexao);

			 ?>

			 <br>

		</div>

	</div>

	<div class="rodape">

		<h6>Todos os direitos reservados</h6>
		Welington V. Silfer | Suporte: (61) 9 9672-6708		

	</div>

</body>
</html>


