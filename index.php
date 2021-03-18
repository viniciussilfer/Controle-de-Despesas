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
	
		<h2>Cadastro de Despesas</h2><br><br>

		<form class="cadastro" method="post" action="processa.php"> 
			
			<h5>Despesa:</h5>
			<input type="text" name="despesa" value="" class="campo" autofocus required
			 maxlength="15"><br><br>

			

			<h5>Valor:</h5>
			<input type="text" name="valor" class="campo" required maxlength="15"><br><br>

			<h5>Status:</h5>
				<select name="status" class="campo" required>
				
					<option selected disabled>Selecione</option>
					<option value="Quitado">Quitado</option>
					<option value="Em aberto">Em aberto</option>

				</select><br><br>

				<h5>Dia:</h5>
					<select name="dia" class="campo" required>
					
					<option selected disabled>Selecione</option>
					<option value="1">01</option>
					<option value="2">02</option>
					<option value="3">03</option>
					<option value="4">04</option>
					<option value="5">05</option>
					<option value="6">06</option>
					<option value="7">07</option>
					<option value="8">08</option>
					<option value="9">09</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
					<option value="24">24</option>
					<option value="25">25</option>
					<option value="26">26</option>
					<option value="27">27</option>
					<option value="28">28</option>
					<option value="29">29</option>
					<option value="30">30</option>
					<option value="31">31</option>


					</select>

				<h5>Mês:</h5>
				<select name="mes"class="campo" required>

					<option selected disabled>Selecione</option>
					<option value="Janeiro">Janeiro</option>
					<option value="Fevereiro">Fevereiro</option>
					<option value="Março">Março</option>
					<option value="Abril">Abril</option>
					<option value="Maio">Maio</option>
					<option value="Junho">Junho</option>
					<option value="Julho">Julho</option>
					<option value="Agosto">Agosto</option>
					<option value="Setembro">Setembro</option>
					<option value="Outubro">Outubro</option>
					<option value="Novembro">Novembro</option>
					<option value="Dezembro">Dezembro</option>

				</select><br><br>

				<h5>Ano:</h5>
				<select name="ano" class="campo"required>
					
					<option selected disabled>Selecione</option>
					<option value="2020">2020</option>
					<option value="2021">2021</option>
					<option value="2022">2022</option>
					<option value="2023">2023</option>
					<option value="2024">2024</option>
					<option value="2025">2025</option>
					<option value="2026">2026</option>
					<option value="2027">2027</option>
					<option value="2028">2028</option>
					<option value="2029">2029</option>


				</select><br><br>

			<input type="submit" name="salvar" value="Salvar" class="btn1">
			<input type="submit" name="limpar" value="Limpar" class="btn">

		</form>

	</div>

	<div class="rodape">

		<h6>Todos os direitos reservados</h6>
		Welington V. Silfer | Suporte: (61) 9 9672-6708		

	</div>

</body>
</html>