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
	<link rel = "stylesheet" type = "text/css" href = "cons.css">
	
	<script language="Javascript">
	
		function valida(){
			vazio=false;
			if(document.f1.nome.value==""){
				alert("O Nome ...... tem que ser preenchido");
				vazio=true
			}
			if(document.f1.end.value==""){
				alert("O Nome da Mãe ...... tem que ser preenchido");
				vazio=true
			}
			if(document.f1.city.value==""){
				alert("O Telefone ...... tem que ser preenchido");
				vazio=true
			}
			if(document.f1.cod.value==""){
				alert("O Tipo ...... tem que ser preenchido");
				vazio=true
			}
			if(vazio==false) document.f1.submit();
		}
	</script>
		
</head>
<body background="biblioteca2.jpeg">

	<?php
	include 'config.php';
	include 'mysqlexecuta.php';
	$con = conectar();
	mysql_select_db('Bd_Empresa');
	$pesquisa=$_POST["pesquisa"];
	$sql = "SELECT * FROM fornecedores where Cod_Fornecedor like '%$pesquisa%'";
	$res = mysqlexecuta($con,$sql);
	$quant = (mysql_num_rows($res));
	
	if($quant==0){
	?>
		<div class = "Box2" id = "bpesquisa">				
				<div class = "P1">
					<img src ="dead.jpg">
				</div>
				<div class = "P2">	
					<p class = "TituloBox2"> Registro Não Encontrado </p>
				</div>
				<br><br><br><br>	<center><a href="Index_Menu.html"><input type="submit" name="pesquisar" value="Voltar ao Menu Inicial"></a></button></center>

		</div>
	<?php
	}
	else{
		$row = mysql_fetch_array($res);
	?>
	<br><br>
	<div id = "Cadastro">
			
			<form name="f1" method = "POST" action="altera_fornecedor2.php">
				
						<h1>Alterar Fornecedor</h1>
						
						<?php echo $row['Cod_Fornecedor'] ?>
					Código :<br><input type="hidden" name="codfornecedor" id="nome_cad"  placeholder="ex : 1" required="required" onkeypress="return blokletras(event)" value=<?php echo $row['Cod_Produto'] ?>>
		
					<br> Razão Social:<input type="text" name="razaosocial" id="nome_cad"  required="required"  value=<?php echo $row['Razao_Social'] ?>>
					<br>Nome Fantasia :<input type="text" name="nomefantasia" id="nome_cad"  required="required"  value=<?php echo $row['Nome_Fantasia'] ?>>
					<br>CNPJ:<input type="text" name="CNPJ" id="nome_cad"  required="required"  value=<?php echo $row['CNPJ'] ?>>
					<br>Endereco :<input type="text" name="endereco" id="nome_cad"  required="required"  value=<?php echo $row['Endereco'] ?>>
					<br>Num:<input type="text" name="num" id="nome_cad"  required="required"  value=<?php echo $row['Num'] ?>>
					<br>Bairro:<input type="text" name="bairro" id="nome_cad"  required="required"  value=<?php echo $row['Bairro'] ?>>
					<br>Cidade:<input type="text" name="cidade" id="nome_cad"  required="required"  value=<?php echo $row['Cidade'] ?>>
					<br>Fone:<input type="text" name="fone" id="nome_cad"  required="required"  value=<?php echo $row['Fone'] ?>>
					<br>Nome_Contato:<input type="text" name="nomecontato" id="nome_cad"  required="required"  value=<?php echo $row['Nome_Contato'] ?>>
					<br>Email:<input type="text" name="email" id="nome_cad"  required="required"  value=<?php echo $row['Email'] ?>>
					<br>Site:<input type="text" name="site" id="nome_cad"  required="required"  value=<?php echo $row['Site'] ?>>

			<br><br><input type="submit" name="pesquisar" value="Enviar" onclick="valida()">
					<br><br>
			</form>
	</div>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

		<center><a href="Index_Menu.html"><input type="submit" name="pesquisar" value="Voltar ao Menu Inicial"></a></button></center>

	<?php
	}
	?>
	
	
</body>
</html>	