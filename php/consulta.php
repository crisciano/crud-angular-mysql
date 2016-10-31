<?php 
	include "db.php";

	$consulta = $db->query("SELECT * FROM `pet_config`");

	while ($dados = $consulta->fetch_assoc()) {
		$data[] = $dados;
		# code...
	}

	echo json_encode($data);

 ?>