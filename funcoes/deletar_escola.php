<?php
	session_start();
	include('conexao.php');

	if(isset($_POST['delete'])){
		

		$escola_id = mysqli_escape_string($conexao, $_POST['escola_id'] );
		$sql2 = "SELECT imagem, escola_id from escola where escola_id = '$escola_id'";
		$result = mysqli_query($conexao, $sql2);
		$mostrar = mysqli_fetch_array($result);
		$sql = "DELETE FROM escola WHERE escola_id = '$escola_id'";
		if (mysqli_query($conexao, $sql)) {
			unlink("../imagens/".$mostrar['imagem']);
			$_SESSION['login'][1] = "DELETADO COM SUCESSO";
			header('Location: ../interface/.php');
			
		}else{
			$_SESSION['login'][2] = "ERRO AO DELETAR";
			header('Location: ../interface/.php');
			
		}
	
}
?>