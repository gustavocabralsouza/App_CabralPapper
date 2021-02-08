<html>
<head>
	
	<title>
		Exclusão
	</title>
	
	<meta charset = "UTF-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="CSS_Login.css"/>	
	<link rel = "stylesheet" type = "text/css" href = "pagina.css">
	<link rel = "stylesheet" type = "text/css" href = "Form.css">
	<link rel = "stylesheet" type = "text/css" href = "cons.css">
	
	<script language="Javascript">
	
		function valida(){
			vazio=false;
			if(document.f1.pesquisa.value==""){
				alert("A Pesquisa ...... tem que ser preenchida");
				vazio=true
			}
			if(vazio==false) document.f1.submit();
		}
	</script>
		
</head>
<body background="biblioteca2.jpeg">
		
	<div id = "Conteudo">
	<br><br><br><br><br><br>
	<?php
		include 'config.php';
		include 'mysqlexecuta.php';
		$con = conectar();
		mysql_select_db('Bd_Empresa');
		$pesquisa = $_POST["pesquisa"];
		$sql = "SELECT * FROM produtos where Cod_Produto = $pesquisa";
		$res = mysqlexecuta($con,$sql);
		$quant= mysql_num_rows($res);
		if($quant==0){
	?>
		<div class = "Box2" id = "bpesquisa">				
				<div class = "P1">
					<img src ="excluir.jpg">
				</div>
				<div class = "P2">	
					<p class = "TituloBox2"> Registro Não Encontrado </p>
				</div>
		</div>
	<?php
		}
		else{
			$sql="delete from produtos where Cod_Produto = $pesquisa";
			$res = mysqlexecuta($con,$sql);
	?>
		<div class = "Box2" id = "bpesquisa">				
				<div class = "P1">
					<img src ="excluir.jpg">
				</div>
				<div class = "P2">	
					<p class = "TituloBox2"> Registro Excluido com Sucesso </p>
				</div>
		</div>
	<?php
		}
	?>
	</div>	
	<center><a href="Index_Menu.html"><input type="submit" name="pesquisar" value="Voltar ao Menu Inicial"></a></button></center>

	
</body>
</html>	