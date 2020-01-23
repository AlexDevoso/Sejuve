<?php
    include "conexao.php";



    if(isset($_POST["nomeatleta"]))
    {
        $nomeatleta = $_POST["nomeatleta"];    
    }else{
        $nomeatleta = 0;
    }
    if(isset($_POST["naturalidade"])){
        $naturalidade = $_POST["naturalidade"];
    }else{
        $naturalidade = 0;
    }
    if(isset($_POST["rgatleta"])){
        $rgatleta = $_POST["rgatleta"]; 
    }else{
        $rgatleta = 0;
    }
    
    $contador = $nomeatleta + $naturalidade + $rgatleta;

    $sql = "INSERT INTO evento (contadorinput) values ($contador)";
    if(mysqli_query($conexao, $sql)){
        header('Location: testecheck.php');
    }
?>