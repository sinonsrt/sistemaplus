<?php
	//conexão com o servidor
	$servidor = "localhost";
	$usuario  = "root";
	$senha 	  = "";
	$bd		  = "webplus";

	try{
		$pdo = new PDO("mysql:host=$servidor; dbname = $bd; charset = utf8", $usuario, $senha);
	} catch (PDOException $erro) {
		$msg = $erro->getMessage();
		echo "<p> Erro ao se conectar com bando de dados: $msg </p>";
	}
?>