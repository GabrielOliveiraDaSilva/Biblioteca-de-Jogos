<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro de Aparelhos</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<h1>CADASTRO DE APARELHOS ELETRÔNICOS</h1>

	<h2>Digite abaixo as informações do aparelho:</h2>

	<form action="cadastro.php" method="post">

		<p>
			<label>Nome:</label><br>
			<input class="input" type="text" name="nome" maxlength="25" required placeholder="EX: NOME">
		</p>

		<p>
			<label>Consumo Máximo (W):</label><br>
			<input class="input" type="number" name="W" min="1" max="500" required placeholder="EX: 180">
		</p>

		<p>
			<label>Tempo Ligado:</label><br>
			<input class="input" type="number" name="horas" min="1" max="24" required placeholder="EX: 12">
		</p>

		<p>
			<label>Dias Ligado:</label><br>
			<input class="input" type="number" name="dias" min="1" max="31" required placeholder="EX: 12">
		</p>

		<p>
			<label>Valor (KWh):</label><br>
			<input class="input" type="number" name="valor" step="0.01" min="0.77" max="4" required placeholder="EX: 12">
		</p>

		<p>
			<button class="botao" type="submit" name="enviar">ENVIAR</button>
		</p>
		
	</form>



</body>
</html>