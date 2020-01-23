<?php
include "../funcoes/conexao.php";
session_start();
$categoria = $_POST['categoria'];
$naipe = $_POST['naipe'];
$modalidade = $_POST['modalidade'];
$esporte = $_POST['esporte'];
if($modalidade == 'coletiva'){
	$sql = "SELECT modalidade_coletivaid from modalidade_coletiva where nome_mc = '{$esporte}' AND categoria_mc = '{$categoria}' AND naipe_mc = '{$naipe}'";
	if(mysqli_query($conexao, $sql)){
	$result = mysqli_query($conexao, $sql);
	$verifica = mysqli_fetch_row($result);
	$id = implode($verifica);
	$_SESSION['modalidade'] = array($categoria, $naipe, $modalidade, $esporte, $id);
	header('Location: teste.php');
	}
	
}
else{
	$sql = "SELECT modalidade_individualid from modalidade_individual where nome_mi = '{$esporte}' AND  categoria_mi = '{$categoria}' AND  naipe_mi = '{$naipe}'";
	if(mysqli_query($conexao, $sql)){
	$result = mysqli_query($conexao, $sql);
	$verifica = mysqli_fetch_row($result);
	$id = implode($verifica);
	$_SESSION['modalidade'] = array($categoria, $naipe, $modalidade, $esporte, $id);
	header('Location: teste.php');
	}
}


?>