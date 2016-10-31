<?php 
	include "db.php";

	$data = json_decode(file_get_contents("php://input"));

	$nome = $db->real_escape_string($data->nome);
	$valor= $db->real_escape_string($data->valor);

	$db->query("INSERT INTO `pet_config`(`nome`, `valor`) VALUES ('$nome' , '$valor')");

	if ($db->affected_rows) {
			echo "cadastrado com sucesso";
			# code...
		} else {
			# code...
			echo "erro ao cadastrar";
		}
 ?>