<html>
<head>
	
	<title>
		Cadastro
	</title>
	
	<meta charset = "UTF-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="CSS_Login.css"/>	
	<link rel = "stylesheet" type = "text/css" href = "pagina.css">
	<link rel = "stylesheet" type = "text/css" href = "Form.css">
	<link rel = "stylesheet" type = "text/css" href = "cons.css">
	<link rel = "stylesheet" type = "text/css" href = "tabela.css">
	<link rel = "stylesheet" type = "text/css" href = "cons.css">
	
</head>
<body background="biblioteca2.jpeg">

	<div id = "Conteudo">
<?php

	$cod = $_POST["cod"];
	$descricao = $_POST["descricao"];
	$unidade = $_POST["unidade"];
	$estoque= $_POST["estoque"];
	$caracteristicas = $_POST["caracteristicas"];
	$codfornecedor = $_POST["codfornecedor"];

	include 'config.php';			
	include 'mysqlexecuta.php';		
	
	$con = conectar();  
	
	mysql_select_db('Bd_Empresa'); 
	
	$sql= "INSERT INTO produtos (Cod_Produto,Descricao,Unidade,Qtde_Estoque,Caracteristicas,Cod_Fornecedor)Values($cod,'$descricao','$unidade',$estoque,'$caracteristicas',$codfornecedor)";
	
	$res = mysqlexecuta($con,$sql); 
?>
		<div class = "Box2" id = "bpesquisa">				
				<div class = "P1">
					<img src ="dead.jpg">
				</div>
				<div class = "P2">	
					<p class = "TituloBox2"> Cadastro Efetuado com Sucesso </p>
				</div>
		</div>
		<br><br><br>
	<center><a href="Index_Menu.html"><input type="submit" name="pesquisar" value="Voltar ao Menu Inicial"></a></button></center>
		<br><br> <br> <br> <br> <br>   

</div>
</body>
</html>	