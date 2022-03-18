<?php include_once 'lock.php'; 

	  include_once '../database/jogos.dao.php'; 

	  if (!isset($_GET['id_jogo']))

	  {
	  	header('location:index.php?msg=idinvalido');
	  }

	  else

	  {
	  	//tentar buscar registro desejado

	  	$result = buscar_jogos($_GET['id_jogo']);

	  	if ($result == null)

	  	{
	  	header('location:index.php?msg=idinvalido');
	   	}

	   	else

	   	{
	   		$jogo = mysqli_fetch_assoc($result);
	   	}
	  
	  }


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Projeto Final - Edição</title>
</head>
<body class="container-fluid">

	<h1>BIBLIOTECA PESSOAL EDIÇÃO DE JOGOS</h1>

	<p>
		<a href="index.php">SAIR</a>
	</p>

	<h3>EDIÇÃO DE JOGOS:</h3>
	
	<form action="editado.php" method="post">
		
		<p>
			<label>Nome:</label><br>
			<input type="text" name="nome" required value="<?= $jogo['nome'] ?>">
		</p>

		<p>
			<label>Gênero:</label><br>
			<input type="text" name="genero" required value="<?= $jogo['genero'] ?>">
		</p>

		<p>
			<label>Ano:<label><br>
			<input type="number" name="ano" required value="<?= $jogo['ano'] ?>">
		</p>

		<p>
			<button type="submit" name="salvar">SALVAR ALTERAÇÕES</button>
		</p>

			<input type="hidden" name="id_jogo" value="<?= $jogo['id_jogo'] ?>">




	</form>


</body>
</html>