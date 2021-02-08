<!DOCTYPE html>
<html>
<head>
	<title>PHP-Funcao executa Comandos SQL</title>
</head>
<body>
	<?php
		function mysqlexecuta($id,$sql,$erro = 1) {
			if(empty($sql) or ! ($id) )
				return 0;

			if(! ($res = @mysql_query($sql,$id))) {
				if($erro) {
					echo "Ocorreu um erro na execução do comando SQL no banco de dados. Favor contatar o Administrador ";
					echo "<br>" . "<b> Comando : </b>" .$sql . "<br>" . "<b>Id: </b>" .$id. "<br>";
					exit;
				}
					
			}
			return $res;
		}


	?>

</body>
</html>