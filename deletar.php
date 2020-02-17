<?php
//incluindo o arquivo de conexão com o banco de dados
include_once("config.php");

//obtendo a identificação dos dados do URL
$id_kart = $_GET['id_kart'];

//excluindo a linha da tabela
$result = mysqli_query($mysqli, "DELETE FROM kart WHERE id_kart=$id_kart");

//redirecionando para a página de exibição (index.php in our case)
header("Location:index.php");
?>

