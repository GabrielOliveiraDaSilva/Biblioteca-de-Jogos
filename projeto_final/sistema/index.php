<?php include_once 'lock.php'; 

	  include_once '../database/jogos.dao.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Projeto Final - SISTEMA</title>
</head>

<div class="p-3 mb-2 bg-light text-dark">

<body class="container-fluid">




	<h1>BIBLIOTECA PESSOAL DE JOGOS</h1>

	<p>
		<a href="logout.php" class="btn btn-secondary">SAIR</a>
	</p>

	<?php 
	if (isset($_GET['msg'])) 
	{
		include_once '../util.php';
		echo validar_msg($_GET['msg']);
	}

	 ?>


	<h3>CADASTRO DE JOGOS:</h3>

	<div class="shadow p-3 mb-5 bg-body rounded">

	<div class="col-5">
	
	<form action="cadastrar.php" method="post" >
		
		<p>
			<label class="form-label">Nome:</label><br>
			<input type="text" name="nome" required class="form-control">
		</p>

		<p>	
			<label class="form-label">Gênero:</label><br>
			<input type="text" name="genero" required class="form-control">
		</p>

		<p>
			<label class="form-label">Ano:</label><br>
			<input type="number" name="ano" required class="form-control">
		</p>

		<button type="submit" name="salvar" class="btn btn-outline-primary">SALVAR</button>
	</form>

	</div>

	</div>

	<h2>JOGOS NA BIBLIOTECA:</h2>

	<?php

	echo exibir_jogos();

	 ?>

</body>

</div>
</html>