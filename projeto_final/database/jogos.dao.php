<?php 
include_once 'conn.php';

// função para salvar jogos

function salvar_jogo($nome, $genero, $ano)

{
	$conn = conectar();
	$sql = "INSERT INTO jogos_tb (nome, genero, ano)
	VALUES ('$nome', '$genero', '$ano')";

	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) >0 )

	{
		return true;
	}
		return false;
}

// função de busca de todos os jogos

function buscar_jogos()
{
	$conn = conectar();
	$sql = "SELECT * FROM jogos_tb";
	$result = mysqli_query ($conn, $sql);

	if (mysqli_affected_rows($conn) > 0) 
	{
		return $result; 	
	}

	return null;

}

	//função de exibição

	function exibir_jogos()
	{
		$result = buscar_jogos();

		//se o retorno for nulo, exibe uma mensagem de erro

		if ($result == null) 
		{
			$retorno = '<h3>Não existem registros</h3>';
		}

	else //quando existe um registro
		{
			$retorno = '<table border="1px" width="400px" class="table table-hover"> ';
			//montagem de tabela
			$retorno .= '<tr>';
			$retorno .= '<th>ID #</th>';
			$retorno .= '<th>Nome</th>';
			$retorno .= '<th>Gênero</th>';
			$retorno .= '<th>Ano</th>';
			$retorno .= '<th>Deletar</th>';
			$retorno .= '<th>Editar</th>';

			$retorno .= '</tr>';			

			while ($jogo = mysqli_fetch_assoc($result))
			 {

			 //dentro do laço será montada novas linhas de repetição
			 	$retorno .= '<tr>';

			 // = coluna simples
				$retorno .= "<td>"  . $jogo['id_jogo'] . "</td>";
				$retorno .= "<td>"  . $jogo['nome']    . "</td>";
				$retorno .= "<td>"  . $jogo['genero']  . "</td>";
				$retorno .= "<td>"  . $jogo['ano']     . "</td>";
				$retorno .= "<td>"  . link_deletar($jogo['id_jogo']) . "</td>";
				$retorno .= "<td>"  . link_editar($jogo['id_jogo']) . "</td>";
				$retorno .= '</tr>';
			}
			
			$retorno .= '</table>';

		}

		return $retorno;
}

//função da montagem de link de exclusão

function link_deletar($id_jogo)

{
	$link = '<a href = "deletar.php?id_jogo='.$id_jogo.'"onclick = "return confirm(\'Tem certeza que deseja excluir este registro?\')" class="btn btn-danger">Deletar</a>';
	return $link;
}

//função para excluir registro

function delete_jogo($id_jogo)
{
	$conn = conectar();
	$sql = "DELETE FROM jogos_tb WHERE id_jogo = $id_jogo";
	$result = mysqli_query($conn, $sql);
	if (mysqli_affected_rows($conn) > 0)
	{
		return true;

	}
	return false;


}

//função para montar link de edição

function link_editar($id_jogo)
{
	$link = '<a href="editar.php?id_jogo='.$id_jogo.'" class="btn btn-warning">Editar</a>';
	return $link;
}

//função para busacar um registro especifico

function buscar_jogo($id_jogo)

{
	$conn = conectar();

	$sql = "SELECT * FROM jogos_tb WHERE id_jogo = $id_jogo";

	$result =  mysqli_query ($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)

	{
		return $result;
	}

	return null;

}

//função para editar dados do registro
function editar_jogo ($id_jogo, $nome, $genero, $ano) 

{
	$conn = conectar();
	$sql = "UPDATE jogos_tb SET nome = '$nome', genero = '$genero', ano = '$ano' WHERE id_jogo = $id_jogo";
	$result = mysqli_query($conn, $sql);
	if (mysqli_affected_rows($conn) > 0)

	{
		return true;
	}

	return false;

}
 

 ?>

