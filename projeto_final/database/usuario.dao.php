<?php 

// pesquisa de usuario no banco de dados 

function buscar_usuario($usuario, $senha)

{
	//conectar com o banco
	include_once 'conn.php';

	$conn = conectar();

	//criar uma busca na tabela de usuarios

	$sql = "SELECT * FROM usuario_tb WHERE usuario = '$usuario' AND senha = '$senha' " ;

	//executar o comando sql

	$result = mysqli_query ($conn, $sql);

	//verificar o nume de linhas afetadas pelo sql
	if (mysqli_affected_rows($conn) > 0) 
	{
		return true;
	}

	// retorno falso dentro ou fora do ifen não faz diferença
	return false;

}



 ?>