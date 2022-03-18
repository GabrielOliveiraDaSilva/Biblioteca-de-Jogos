
<?php 
 
// conexão com o banco de dados

include_once 'config.php';

function conectar ()

{
	return mysqli_connect(HOST, USERNAME, PASSWORD, DBNAME);

}


 ?>