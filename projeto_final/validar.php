<?php 

// varificar se o formulario foi preenchido

if (!isset($_POST['acessar']) || empty($_POST['usuario']) || empty($_POST['senha']))

{
	//redirecionamento de usuario para home
	header('location:index.php?msg=embranco');
}

{
	$usuario = $_POST['usuario'];
	$senha   = $_POST['senha'];

	//iclusao do arquivo do usuario.dao
	include_once 'database/usuario.dao.php';


	//busca do usuario na tabela usuario_tb com bse nos dados fornecidos no primeiro formulario
	$result = buscar_usuario($usuario, $senha);

	//sempre fazer pequenos testes antes de continuar no projeto
	// se usuario e senha estiverem corretos, o valor de $result será verdadeiro
	if ($result)
	{

		//iniciar sessão
		session_start();
		$_SESSION['usuario'] =  $usuario;
		$_SESSION['senha']   = $senha;
	
		//redirecionar para sistema
		header('location:sistema/index.php');
	}
	else
	{
		//redirecionar o usuario para home
		header('location:index.php?msg=invalido');
	}



}

 ?>