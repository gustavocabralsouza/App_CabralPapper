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

	$codfornecedor2 = $_POST["codfornecedor2"];
	$razaosocial = $_POST["razaosocial"];
	$nomefantasia = $_POST["nomefantasia"];
	$CNPJ= $_POST["CNPJ"];
	$endereco = $_POST["endereco"];
	$num = $_POST["num"];
	$bairro = $_POST["bairro"];
	$cidade = $_POST["cidade"];
	$fone = $_POST["fone"];
	$nomecontato = $_POST["nomecontato"];
	$email = $_POST["email"];
	$site = $_POST["site"];


	include 'config.php';			
	include 'mysqlexecuta.php';		
	
	$con = conectar();  
	
	mysql_select_db('Bd_Empresa'); 
	
	$sql= "INSERT INTO fornecedores (Cod_Fornecedor,Razao_Social,Nome_Fantasia,CNPJ,Endereco,Num,Bairro,Cidade,Fone,Nome_Contato,Email,Site)Values($codfornecedor2,'$razaosocial','$nomefantasia','$CNPJ','$endereco','$num','$bairro','$cidade','$fone','$nomecontato','$email','$site')";
	
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