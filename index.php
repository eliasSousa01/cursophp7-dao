<?php
	
	require_once("config.php");
/*
	I

	$sql = new Sql();

	$usuarios = $sql->select("SELECT*FROM tb_usuarios");

	echo json_encode($usuarios);
*/

	#II -carrega um usuario

	/*
	$root = new Usuario();
	$root -> loadById(3);
	echo $root;
	*/

	#carrega lista de usuario
	// $lista = Usuario::getList();
	// echo json_encode($lista);

	#carregar lista de users buscando pelo login
	//$search = Usuario::search("jo");
	//echo json_encode($search);


	#carrega usuario usando login e senha
	$usuario = new Usuario();
	$usuario->login("root","root321");

	echo $usuario;





?>