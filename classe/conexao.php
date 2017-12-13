<?php
	$host = "localhost";
	$usu = "root";
	$senha = "";
	$banco = "banco";
	$mysqli = new mysqli($host, $usu, $senha, $banco);
	if($mysqli->connect_errno)
		echo "Falha na conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_error;	
?>