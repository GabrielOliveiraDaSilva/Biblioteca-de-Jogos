<?php include_once 'lock.php'; 

// verificar sse os dados estão incorretos

if(!isset($_POST['salvar']) || empty($_POST['nome']) || empty($_POST['genero']) || empty($_POST['ano']))

{
	header('location:index.php?msg=edtembranco');
}

else

{

	$id_jogo = $_POST['id_jogo'];

	$nome   = $_POST['nome'];
	$genero = $_POST['genero'];
	$ano    = $_POST['ano'];

	include_once '../database/jogos.dao.php';

	$result = editar_jogo($id_jogo, $nome, $genero, $ano);

	if ($result)
	{
		header('location:index.php?msg=editado');
	}

	else
	{
		header('location:index.php?msg=erroeditar');
	}


}









?>


