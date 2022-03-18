<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Projeto Final - HOME</title>
</head>



<body class="container-fluid">

	

	<h1>BIBLIOTECA PESSOAL DE JOGOS</h1>

		<?php 
	if (isset($_GET['msg'])) 
	{
		include_once 'util.php';
		echo validar_msg($_GET['msg']);
	}

	 ?>

	<h2>Preencha os campos abaixo para utilizar o site.</h2>

	<div class="col-5">

	<form action="validar.php" method="post">
		
		<p>
			<label>Usuário:</label><br>
			<input type="text" name="usuario" required class="form-control">			
		</p>

		<p>
			<label>Senha:</label><br>
			<input type="password" name="senha" required class="form-control">
		</p>

		<button type="submit" name="acessar" class="btn btn-outline-primary">Acessar</button>



	</form>

</div>

</body>
</html>