<?php
//incluindo o arquivo de conexão com o banco de dados
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM kart ORDER BY hora DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM kart ORDER BY hora DESC"); // using mysqli_query instead
?>

<html>
<head>	
	<title>Pagina inicial</title>
</head>

<body>
<a href="add.html">Adicionar novos dados</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Hora</td>
		<td>Codigo_piloto</td>
		<td>Piloto</td>
		<td>Numerovolta</td>
		<td>Tempovolta</td>
		<td>Velocidademediadavolta	
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['hora']."</td>";
		echo "<td>".$res['codigo_piloto']."</td>";
		echo "<td>".$res['piloto']."</td>";
		echo "<td>".$res['numerovolta']."</td>";
		echo "<td>".$res['tempovolta']."</td>";
		echo "<td>".$res['velocidademediadavolta']."</td>";	
		echo "<td><a href=\"editar.php?id=$res[hora]\">Editar</a> | <a href=\"deletar.php?id=$res[hora]\" onClick=\"return confirm('Tem certeza de que deseja excluir?')\">Deletar</a></td>";		
	}
	?>
	</table>
</body>
</html>
