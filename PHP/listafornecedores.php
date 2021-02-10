<html>
<head>

	<title>
		Menu
	</title>
	
	<meta charset = "UTF-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="CSS_Login.css"/>		
	<link rel = "stylesheet" type = "text/css" href = "pagina.css">
	<link rel = "stylesheet" type = "text/css" href = "tabela.css">
	<link rel = "stylesheet" type = "text/css" href = "rodape.css">
	<link rel = "stylesheet" type = "text/css" href = "cons.css">


</head>
<body background="biblioteca2.jpeg">

				
<div id = "Conteudo">
<?php
	include 'config.php';
	include 'mysqlexecuta.php';
	$con = conectar();
	mysql_select_db('Bd_Empresa');
	$sql = "SELECT * FROM fornecedores order by Cod_Fornecedor";
	$res = mysqlexecuta($con,$sql);
?>

<center>
<table align="center">
	<tr> 
		<td  class="imgtabela" align="center" height="250px">
			<img src="excluir.jpg">	
		</td> 
	</tr>
	<tr>
		<td bgcolor=#FFFFff>
			<p align="center"> <b class="tbl_title">Fornecedores </b></p>
		</td>
	</tr>
</table>

	<br>
	
<table p align ="center">
	<tr> 
		<td width="50%">
			<b>Cod_Fornecedor</b>
		</td>
		<td width="50%">
			<b>Razão Social</b>
		</td>
		<td width="50%">
			<b>Nome Fantasia</b>
		</td>
		<td width="50%">
			<b>CNPJ</b>
		</td>
		<td width="50%">
			<b>Endereço</b>
		</td>
		<td width="50%">
			<b>Número do Fornecedor</b>
		</td>
		<td width="50%">
			<b>Bairro</b>
		</td>
		<td width="50%">
			<b>Cidade</b>
		</td>
		<td width="50%">
			<b>Telefone</b>
		</td>
		<td width="50%">
			<b>Nome Contato</b>
		</td>
		<td width="50%">
			<b>Email</b>
		</td>
		<td width="50%">
			<b>Site</b>
		</td>
	</tr>
<?php
	while ($row = mysql_fetch_array($res)) {
?>
	<tr>
		<td>
			<?php echo $row['Cod_Fornecedor'];?>
		</td>
		<td>
			<?php echo $row['Razao_Social'];?>
		</td>
		<td>
			<?php echo $row['Nome_Fantasia'];?>
		</td>
		<td>
			<?php echo $row['CNPJ'];?>
		</td>
		<td>
			<?php echo $row['Endereco'];?>
		</td>
		<td>
			<?php echo $row['Num'];?>
		</td>
		<td>
			<?php echo $row['Bairro'];?>
		</td>
		<td>
			<?php echo $row['Cidade'];?>
		</td>
		<td>
			<?php echo $row['Fone'];?>
		</td>
		<td>
			<?php echo $row['Nome_Contato'];?>
		</td>
		<td>
			<?php echo $row['Email'];?>
		</td>
		<td>
			<?php echo $row['Site'];?>
		</td>
	</tr>
<?php 
	}
?>
</table>
</center>
<br><br>
	<center><a href="Index_Menu.html"><input type="submit" name="pesquisar" value="Voltar ao Menu Inicial"></a></button></center>


</body>
</html>	