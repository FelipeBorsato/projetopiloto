<?php
//incluindo o arquivo de conexão com o banco de dados
include_once("config.php");

if(isset($_POST['update']))
{	
	$id_kart = mysqli_real_escape_string($mysqli, $_POST['id_kart']);
	$hora = mysqli_real_escape_string($mysqli, $_POST['hora']);
	$codigo_piloto = mysqli_real_escape_string($mysqli, $_POST['codigo_piloto']);
	$piloto = mysqli_real_escape_string($mysqli, $_POST['piloto']);	
	$numerovolta = mysqli_real_escape_string($mysqli, $_POST['numerovolta']);
	$tempovolta = mysqli_real_escape_string($mysqli, $_POST['tempovolta']);
	$velocidademediadavolta = mysqli_real_escape_string($mysqli, $_POST['velocidademediadavolta']);	
	
	// verificando campos vazios
	if(empty($id_kart) || empty($hora) || empty($codigo_piloto) || empty($piloto) || empty($numerovolta) || empty($tempovolta)|| empty($velocidademediadavolta)) {

	    if(empty($id_kart)) {
	    	echo "<font color='red'>O campo id_kart está vazio.</font><br/>";
	    }	
			
		if(empty($hora)) {
			echo "<font color='red'>O campo hora está vazio.</font><br/>";
		}
		
		if(empty($codigo_piloto)) {
			echo "<font color='red'>o campo codigo piloto está vazio.</font><br/>";
		}
		
		if(empty($piloto)) {
			echo "<font color='red'>o campo piloto está vazio.</font><br/>";
		}

		if(empty($numerovolta)) {
			echo "<font color='red'>o campo piloto está vazio.</font><br/>";
		}
		
		if(empty($tempovolta)) {
			echo "<font color='red'>o campo tempo volta está vazio.</font><br/>";
		}
		
		if(empty($velocidademediadavolta)) {
			echo "<font color='red'>o campo velocidade media da volra está vazio.</font><br/>";
		}		
	} else {	
		//atualizando a tabela
		$result = mysqli_query($mysqli, "UPDATE kart SET id_kart='id_kart',hora='$hora',codigo_piloto='$codigo_piloto',piloto='$piloto',numerovolta='$numerovolta',tempovolta='$tempovolta',velocidademediadavolta='velocidademediadavolta' WHERE id_kart=$id_kart");
		
		//redirecionando para a página de exibição. No nosso campo index.php
		header("Location: index.php");
	}
}
?>
<?php
//obtendo o hora do URL
$id_kart = $_GET['id_kart'];

//selecionando dados associados com hora específico
$result = mysqli_query($mysqli, "SELECT * FROM kart WHERE id_kart=$id_kart");

while($res = mysqli_fetch_array($result))
{
	$id_kart = $res['id_kart'];
	$hora = $res['hora'];
	$codigo_piloto = $res['codigo_piloto'];
	$piloto = $res['piloto'];
	$numerovolta = $res['numerovolta'];
	$tempovolta = $res['tempovolta'];
	$velocidademediadavolta = $res['velocidademediadavolta'];
}
?>
<html>
<head>	
	<title>Editar Kart</title>
</head>

<body>
	<a href="index.php">Voltar</a>
	<br/><br/>
	
	<form name="form1" method="post" action="editar.php">
		<table border="0">
			<tr> 
				<td>Id_kart</td>
				<td><input type="text" name="id_kart" value="<?php echo $id_kart;?>"></td>
			</tr>
			<tr> 
				<td>Hora</td>
				<td><input type="text" name="hora" value="<?php echo $hora;?>"></td>
			</tr>
			<tr> 
				<td>Codigo Piloto</td>
				<td><input type="text" name="codigo_piloto" value="<?php echo $codigo_piloto;?>"></td>
			</tr>
			<tr> 
				<td>Piloto</td>
				<td><input type="text" name="piloto" value="<?php echo $piloto;?>"></td>
			</tr>
			<tr> 
				<td>Numero volta</td>
				<td><input type="text" name="numerovolta" value="<?php echo $numerovolta;?>"></td>
			</tr>
			<tr> 
				<td>Tempo volta</td>
				<td><input type="text" name="tempovolta" value="<?php echo $tempovolta;?>"></td>
			</tr>
			<tr> 
				<td>Velocidade media da volta</td>
				<td><input type="text" name="velocidademediadavolta" value="<?php echo $velocidademediadavolta;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id_kart" value=<?php echo $_GET['id_kart'];?>></td>
				<td><input type="submit" name="editar" value="Editar"></td>
			</tr>
		</table>
	</form>
</body>
</html>
