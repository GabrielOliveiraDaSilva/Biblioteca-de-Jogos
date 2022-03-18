<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro de Aparelhos</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<h1>CADASTRO DE APARELHOS ELETRÔNICOS</h1>

	<?php include_once 'menu.php' ?>

	<h2>Informações do Aparelho</h2>

	<?php 


		if (isset($_POST['enviar']))

		$nome = $_POST['nome'];
		$w = $_POST['W'];
		$horas = $_POST['horas'];
		$dias = $_POST['dias'];
		$valor = $_POST['valor'];
		$consumo_diario = (($w / 1000) * $horas);
		$consumo_mensal = $consumo_diario * $dias;
		$consumo_valor = $consumo_mensal * $valor;

		if 
			($consumo_valor <= 496)
		{
			$resultado = "baixo.";
		}

		else if ($consumo_valor > 496 && $consumo_valor <= 991)
		{
			$resultado = "médio.";
		}

		else if ($consumo_valor >= 992)
		{
			$resultado = "alto.";	
		}

		echo "$nome <br>";
		echo "Seu consumo diário é de: $consumo_diario. (WHs)<br>"; 
		echo "Seu consumo mensal é de: $consumo_mensal. (W)<br>"; 
		echo "O valor mensal do seu consumo é de: R$ $consumo_valor.<br>";
		echo "Seu consumo é considerado $resultado";


	?>
 


</body>
</html>