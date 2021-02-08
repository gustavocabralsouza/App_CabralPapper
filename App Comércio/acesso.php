<!DOCTYPE html>
<html>
<head>
	<title>Pesquisar</title>
</head>
<body>
	<?php
		include 'config.php';
		include 'mysqlexecuta.php';
		$con = conectar();
		mysql_select_db('Bd_Empresa');
		$senha = $_POST["txtNome"];
		$login = $_POST["txtNome2"];
		$sql="SELECT * FROM acesso where senha like '$senha' and login like '$login'";
		$res = mysqlexecuta($con,$sql);
		$quant=(mysql_num_rows($res));
		if($quant==0) {
			echo "<p align='center'><b><font color='#FF0000' Login ou senha inválidos, favor digitar novamente!!!</font></b></p> ";
		}
		else {
			    header("location:Index_Menu.html");
		}
		?>
		

	

</body>
</html>