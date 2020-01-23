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
    <form action="gravar_logo.php" method ="post" 
    enctype="multipart/form-data" name = "cadastro">
    <label>Nome da logo:<br/></label>
    <input type="text" name="nomelogo"/>
    <label>Imagem:<br/></label>
    <input type="file" name="logo"/>
    <input type="submit" name="cadastrar" value="cadastrar" />
    </form>
</body>

<?php
// Seleciona todos os usuários
$sql ="SELECT * FROM logo";
$resultado = mysqli_query($conexao, $sql);
// Exibe as informações de cada usuário
while ($logo = mysqli_fetch_array($resultado)) {
	// Exibimos a foto
	echo "<img src='img/".$logo['nome_logo']."' alt='Foto de exibição' /><br />";
	
}
?>
</html>