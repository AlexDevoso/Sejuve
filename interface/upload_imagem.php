<?php
    include "conexao.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de patrocinadores</title>
</head>
<body>
    <h1>Cadastro de patrocinadores</h1>
    <form action="gravar.php" method ="post"
    enctype="multipart/form-data" name = "cadastro">
    <label>NOME:<br/></label>
    <input type="text" name="nome"/>
    <label>Imagem:<br/></label>
    <input type="file" name="imagemevento"/>
    <input type="submit" name="cadastrar" value="cadastrar"/>
    </form>
</body>

<?php
// Seleciona todos os usuários
$sql ="SELECT * FROM patrocinadores ORDER BY nome";
$resultado = mysqli_query($conexao, $sql);
// Exibe as informações de cada usuário
while ($patrocinadores = mysqli_fetch_array($resultado)) {
	// Exibimos a foto
	echo "<img src='img/".$patrocinadores['foto']."' alt='Foto de exibição' /><br />";
	
}
?>
</html>