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
	$sql = "SELECT * FROM produtos where Cod_Produto like '%$pesquisa%'";
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
			
			<form name="f1" method = "POST" action="altera_produto2.php">
				
						<h1>Alterar Produto</h1>
						
						<?php echo $row['Cod_Produto'] ?>
					Código :<br><input type="hidden" name="cod" id="nome_cad"  placeholder="ex : 1" required="required" onkeypress="return blokletras(event)" value=<?php echo $row['Cod_Produto'] ?>>
		
					<br>Descrição :<input type="text" name="descricao" id="nome_cad"  required="required"  value=<?php echo $row['Descricao'] ?>>
					Unidade :<input type="text" name="unidade" id="nome_cad"  required="required"  value=<?php echo $row['Unidade'] ?>>
					Qtde_Estoque:<input type="text" name="estoque" id="nome_cad"  required="required" onkeypress="return blokletras(event)" value=<?php echo $row['Qtde_Estoque'] ?>>
					Características :<input type="text" name="caracteristicas" id="nome_cad"  required="required"  value=<?php echo $row['Caracteristicas'] ?>>
					Código do Fornecedor:<input type="text" name="codfornecedor" id="nome_cad"  required="required"  value=<?php echo $row['Cod_Fornecedor'] ?>>

			<br><br><input type="submit" name="pesquisar" value="Enviar" onclick="valida()">
					<br><br>
			</form>
	</div>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

		<center><a href="Index_Menu.html"><input type="submit" name="pesquisar" value="Voltar ao Menu Inicial"></a></button></center>
	<?php
	}
	?>
	
	
</body>
</html>	