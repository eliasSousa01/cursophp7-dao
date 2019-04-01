<?php
	
	require_once("config.php");
/*
	I

	$sql = new Sql();

	$usuarios = $sql->select("SELECT*FROM tb_usuarios");

	echo json_encode($usuarios);
*/

	#II
$root = new Usuario();

$root -> loadById(3);

echo $root;

?>