<?php
    include "conexao.php";
    $sql = "SELECT equipeid from equipe";
    $resultado = mysqli_query($conexao, $sql);
    $dados = mysqli_fetch_array($resultado);
    echo $dados['equipeid'];
?>