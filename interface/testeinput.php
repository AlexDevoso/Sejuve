<?php
    include "conexao.php";
    $a = 13;
    $mostrar = "SELECT idevento, contadorinput from evento where idevento = '$a'";
    $resultado = mysqli_query($conexao, $mostrar);
    $dados = mysqli_fetch_array($resultado);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    if($dados['contadorinput'] == 1110){
        ?>
        <label>NOME DO ATLETA</label>
        <input type="text" name="nomeatleta"/>
        <label>RG DO ATLETA</label>
        <input type="text" name="rgatleta"/>
        <label>NATURALIDADE</label>
        <input type="text" name="naturalidade"/>
    <?php
    }
    ?>
    <?php
    if($dados['contadorinput'] == 1100){
        ?>
        <label>RG DO ATLETA</label>
        <input type="text" name="rgatleta"/>
        <label>NATURALIDADE</label>
        <input type="text" name="naturalidade"/>
    <?php
    }
    ?>
    <?php
    if($dados['contadorinput'] == 1000){
        ?>
        <label>NATURALIDADE</label>
        <input type="text" name="naturalidade"/>
    <?php
    }
    ?>
    <?php
    if($dados['contadorinput'] == 10){
        ?>
        <label>NOME DO ATLETA</label>
        <input type="text" name="nomeatleta"/>
    <?php
    }
    ?>
    <?php
    if($dados['contadorinput'] == 110){
        ?>
        <label>NOME DO ATLETA</label>
        <input type="text" name="nomeatleta"/>
        <label>RG DO ATLETA</label>
        <input type="text" name="rgatleta"/>
    <?php
    }
    ?>
    <?php
    if($dados['contadorinput'] == 100){
        ?>
        <label>RG DO ATLETA</label>
        <input type="text" name="rgatleta"/>
    <?php
    }
    ?>
    <?php
    if($dados['contadorinput'] == 3){
        ?>
        SEM INPUT
    <?php
    }
    ?>
</body>
</html>