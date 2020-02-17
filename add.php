<html>
<head>
	<title>Add Kart</title>
</head>

<body>
<?php
//incluindo o arquivo de conexão com o banco de dados
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$id_kart = mysqli_real_escape_string($mysqli, $_POST['id_kart']);
	$hora = mysqli_real_escape_string($mysqli, $_POST['hora']);
	$codigo_piloto = mysqli_real_escape_string($mysqli, $_POST['codigo_piloto']);
	$piloto = mysqli_real_escape_string($mysqli, $_POST['piloto']);
	$numerovolta = mysqli_real_escape_string($mysqli, $_POST['numerovolta']);
	$tempovolta = mysqli_real_escape_string($mysqli, $_POST['tempovolta']);
	$velocidademediadavolta = mysqli_real_escape_string($mysqli, $_POST['velocidademediadavolta']);

	// checking empty fields
	if(empty($id_kart)||empty($hora) || empty($codigo_piloto) || empty($piloto)||empty($numerovolta) || empty($tempovolta) || empty($velocidademediadavolta)) {
				
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
		
		//link para a página anterior
		echo "<br/><a href='javascript:self.history.back();'>Voltar</a>";
	} else { 
		// se todos os campos estiverem preenchidos (não vazios)
			
		//inserir dados no banco de dados
		$result = mysqli_query($mysqli, "INSERT INTO kart(id_kart,hora,codigo_piloto,piloto,numerovolta, tempovolta,velocidademediadavolta) VALUES('$id_kart','$hora','$codigo_piloto','$piloto','$numerovolta','$tempovolta','$velocidademediadavolta')");
		
		//exibir mensagem de sucesso
		echo "<font color='green'>Data adicionado com sucesso.";
		echo "<br/><a href='index.php'>Voltar</a>";
	}
}
?>
</body>
</html>
