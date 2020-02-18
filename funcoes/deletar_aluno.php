<?php
	session_start();
	include('conexao.php');

	if(isset($_POST['delete'])){
		

		$atletaid = mysqli_escape_string($conexao, $_POST['alunoid'] );
		$sql2 = "SELECT imagem, alunoid from aluno where alunoid = '$alunoid'";
		$result = mysqli_query($conexao, $sql2);
		$mostrar = mysqli_fetch_array($result);
		$sql = "DELETE FROM aluno WHERE alunoid = '$alunoid'";
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