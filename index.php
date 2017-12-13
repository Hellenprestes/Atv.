<?php
	include("classe/conexao.php");
	$pass = "SELECT * FROM banco";
	$pase = $mysqli->query($pass) or die ($mysqli->error);
?>
<html>
	<head>
		<meta charset ="utf8">
		<title> Olá, Mundo! </title>
	</head>
	<body>
		<font face = "Verdana">
			<center>
				<table border = "2" bordercolor = "red">
					<tr>
						<td>id</td>
						<td>Saudação</td>
					</tr>
					<?php while($dados = $pase->fetch_array()){?>
					<tr>
						<td>1</td>
						<td>Olá, Mundo</td>
					<?php } ?>
				</table>
			</center>
		</font>
	</body>
</html>