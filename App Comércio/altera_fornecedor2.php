<html>
<head>
	
	<title>
		Alteração
	</title>
	
	<meta charset = "UTF-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="CSS_Login.css"/>	
	<link rel = "stylesheet" type = "text/css" href = "pagina.css">
	<link rel = "stylesheet" type = "text/css" href = "Form.css">
	<link rel = "stylesheet" type = "text/css" href = "Index.css">
	<link rel = "stylesheet" type = "text/css" href = "tabela.css">
	<link rel = "stylesheet" type = "text/css" href = "cons.css">
		
</head>
<body background="biblioteca2.jpeg">

	
	<div id = "Conteudo">
	<?php
	include 'config.php';
	include 'mysqlexecuta.php';
	$con = conectar();
	mysql_select_db('Bd_Empresa');
	$codfornecedor=$_POST["codfornecedor"];
	$razaosocial=$_POST["razaosocial"];
	$nomefantasia=$_POST["nomefantasia"];
	$CNPJ=$_POST["CNPJ"];
	$endereco=$_POST["endereco"];
	$num=$_POST["num"];
	$bairro=$_POST["bairro"];
	$cidade=$_POST["cidade"];
	$fone=$_POST["fone"];
	$nomecontato=$_POST["nomecontato"];
	$email=$_POST["email"];
	$site=$_POST["site"];

	

	$sql = "Update fornecedores set Razao_Social='$razaosocial',Nome_Fantasia='$nomefantasia',CNPJ='$CNPJ',Endereco='$endereco',Num='$num',Bairro='$bairro',Cidade='$cidade',Fone='$fone',Nome_Contato='$nomecontato',Email='$email',Site='$site' where Cod_Fornecedor = '$codfornecedor'";
	$res = mysqlexecuta($con,$sql);
	?>
	<br><br><br><br><br><br>
		<div class = "Box2" id = "bpesquisa">				
				<div class = "P1">
					<img src ="dead.jpg">
				</div>
				<div class = "P2">	
					<p class = "TituloBox2"> Alteração Efetuada com Sucesso </p>
				</div>
		</div>
			<center><a href="Index_Menu.html"><input type="submit" name="pesquisar" value="Voltar ao Menu Inicial"></a></button></center>

		<br><br> <br> <br> <br> <br> <br>  <br><br> <br> <br> <br> <br> <br>  
</div>	

</body>
</html>	