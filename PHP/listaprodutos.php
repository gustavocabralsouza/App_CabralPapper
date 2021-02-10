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
	$sql = "SELECT * FROM produtos order by Cod_Produto";
	$res = mysqlexecuta($con,$sql);
?>
<br>
<br>
<br>
<br>
<br>
<br>
<center>
<table align="center">
	<tr> 
		<td  class="imgtabela" align="center" height="250px">
			<img src="excluir.jpg">	
		</td> 
	</tr>
	<tr>
		<td bgcolor=#FFFFff>
			<p align="center"> <b class="tbl_title">Produtos </b></p>
		</td>
	</tr>
</table>

	<br>
	
<table p align ="center" >
	<tr> 
		<td width="50%">
			<b>Cod_Produto</b>
		</td>
		<td width="50%">
			<b>Descricao</b>
		</td>
		<td width="50%">
			<b>Unidade</b>
		</td>
		<td width="50%">
			<b>Qtde_Estoque</b>
		</td>
		<td width="50%">
			<b>Caracteristicas</b>
		</td>
		<td width="50%">
			<b>Cod_Fornecedor</b>
		</td>
	</tr>
<?php
	while ($row = mysql_fetch_array($res)) {
?>
	<tr>
		<td>
			<?php echo $row['Cod_Produto'];?>
		</td>
		<td>
			<?php echo $row['Descricao'];?>
		</td>
		<td>
			<?php echo $row['Unidade'];?>
		</td>
		<td>
			<?php echo $row['Qtde_Estoque'];?>
		</td>
		<td>
			<?php echo $row['Caracteristicas'];?>
		</td>
		<td>
			<?php echo $row['Cod_Fornecedor'];?>
		</td>
	</tr>
<?php 
	}
?>
</center>
</table>
<br><br>
	<center><a href="Index_Menu.html"><input type="submit" name="pesquisar" value="Voltar ao Menu Inicial"></a></button></center>


</body>
</html>	