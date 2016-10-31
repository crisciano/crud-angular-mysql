<?php 
	include "db.php"; 

	$data = json_decode(file_get_contents("php://input"));
	$id = $data->id;

	$db->query("DELETE FROM `pet_config` WHERE `id_pet_config` = '$id'");

	if ($db->affected_rows) {
		echo "campo deletado com sucesso";
		# code...
	} else {
		echo "erro ao tentar deletar";
		# code...
	}
	


	?>