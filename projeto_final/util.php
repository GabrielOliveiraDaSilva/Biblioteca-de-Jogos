<?php 

// função para validação da mensagem e retornar um texto

function validar_msg($msg)

{
		switch ($msg) 
		{
 
			case 'embranco':
				$retorno = '<h3 class="alert alert-warning">Informe todos os dados para efetuar o login!</h3>';
						break;

			case 'invalido';
				$retorno = '<h3 class="alert alert-warning">Atenção: Usuário ou senha inválidos!</h3>';
					break;

			case 'cadembranco':
				$retorno = '<h3 class="alert alert-warning">Preencha todos os dados do jogo para cadastrar!</h3>';
				break;

			case 'edtembranco':
				$retorno = '<h3 class="alert alert-warning">Preencha todos os dados do jogo para edição!</h3>';
				break;

			case 'cadastrado':
				$retorno = '<h3 class="alert alert-success">Jogo cadastrado com sucesso!</h3>';
				break;

			case 'errocadastro':
				$retorno = '<h3 class="alert alert-warning">Atenção: erro ao efetuar o cadastro. Tente novamente mais tarde!</h3>';
				break;

			case 'idinvalido':
				$retorno = '<h3 class="alert alert-warning">Atenção: jogo inválido, repita a operação!</h3>';
				break; 



			case 'errodeletar':
				$retorno = '<h3 class="alert alert-warning">Atenção: erro ao excluir o cadastro. Tente novamente mais tarde!</h3>';
				break; 

			case 'idinvalido':
				$retorno = '<h3 class="alert alert-warning">Atenção: jogo inválido, repita a operação!</h3>';
				break; 

			case 'jogodeletado':
				$retorno = '<h3 class="alert alert-success">Registro deletado com sucesso!</h3>';
				break; 

			case 'editado':
				$retorno = '<h3 class="alert alert-success">Dados do livro alterados com sucesso!</h3>';
				break; 

			case 'erroeditar':
				$retorno = '<h3 class="alert alert-warning">Atenção: erro ao editar o cadastro. Tente novamente mais tarde!</h3>';
				break; 



			default:
				$retorno = '';
				break;
		}

		return $retorno;

}

 ?>