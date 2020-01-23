<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!--Icons -->
<link href="fontawesome/css/all.css" rel="stylesheet">

<!-- Awesome fonts -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

<!--FONTE USADA NO SITE-->
<link href="https://fonts.googleapis.com/css?family=Roboto:300&display=swap" rel="stylesheet"> 

<!--FAVICON-->
<link rel="shortcut icon" type="image/x-icon" href="../imagens/sistema/fav_icon/fav_icon.ico">

<!--FOLHA DE ESTILO-->
<style type="text/css">
  
/** FOLHA DE ESTILO DO ARQUIVO jogos_escolares.php **/

body {
   font-family: 'Roboto', sans-serif;
}

a {
    color: #fff;
}

a:hover {
   color: #fff;
}

nav {
   background: #151719 !important;
}

span {
color: #fff;
}

#sidebar i {
   color: #2ed573;
   font-size: 20px;
   margin-right: 15px;
}

li {
   font-size: 14px;
}

li:hover {
   background-color: #3d3d3d;
   border-radius: 50px;
}

body {
   font-size: 0.9rem;
}

#head_sidenav {
   border-bottom: 1px solid #3d3d3d;
   margin-bottom: 20px ;
}

* {
    margin: 0px;
    padding: 0px;
}

a {
   text-decoration: none;
}

a:hover {
   text-decoration: none;
}

#sidebar {
     
    width: 100%;
    height: 100%;
    background-color: #151719;
    padding: 20px;
}

#sidebar ul li {
   list-style: none;
}

#sidebar li {
   margin:10px;
}

.bg_form {
   margin-left:80px;
   margin-right:80px;

   height: 50%;
   overflow-x:auto;
   overflow-y: auto;
}

.bg_form_2 {
   margin-left:80px;
   margin-right:80px;
}

table {
   border-collapse: ;
   width: 100%;
}

td {
   text-align: center;
   padding: 8px;
}


th {
   color: white;
   text-align:center;
   padding: 8px;
   border: none !important;

}


h1 {
   font-size: 3em;
}

body {

    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}



.icone_img { 
   margin: 10px;
}

.toast {
    position: relative !important;
    top: 100px !important;
    left:  !important;
}

#voltar_h {
   width: 100px;
   text-align: center;
}

.cot_hj {
    display: flex;
    flex-direction: row;
    width: 100%;
    height: 100%;
    padding: none;
    margin: none !important;
}


</style>


  <title>Simple Sidebar - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Start Bootstrap </div>
      
        <div id="sidebar" >
<ul>

  <p style="color: #fff;text-align:center;font-size: 15px;font-weight:200 !important;" >Sistema do<br>Jogos Escolares 2020</p>

<hr style="background-color: #3d3d3d;">
<div id="head_sidenav">
<center><img style="margin :10px;" width="140" src="../imagens/sejuve_logo.png"></center>
</div>

<li> <a href="area_adm.php"> <div class="ct_menu">  <img width="20" src="../imagens/menu_icones/home1_.png" class="icone_img">  HOME</div>  </a></li>

<li> <a href="cadastrar_escolas_ui.php"> <div class="ct_menu">  <img width="20" src="../imagens/menu_icones/cadastrar.png" class="icone_img">ESCOLAS</div>  </a></li>

<hr style="background-color: #3d3d3d;">

<li> <a href="../funcoes/logout_adm.php"> <div class="ct_menu">   <img width="20" src="../imagens/menu_icones/sair1_.png" class="icone_img"> SAIR </div></a></li>

</ul>
</div>
<!--FECHA BARRA LATERAL-->
    
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
          
          
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
   <!--DIV 2-->
<div  style="width: 100%;padding:0px 15px px 0px;overflow-y: auto;">
    <!--NAVBAR-->
<nav class="navbar navbar-expand-lg shadow "  >
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
<a class="navbar-brand text-white" href="#">Jogos Escolares</a>
<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
<li class="nav-item">
<a id="voltar_h" class="nav-link text-white" href="lista_de_eventos.php">Voltar</a>
</li>
</ul>
</div>
</nav>
<!--FECHA NAVBAR-->
  
<center><h1 style="margin: 20px;">Jogos Escolares - Escolas Cadastradas</h1></center>

<div class="" style="overflow-y: auto;height: 40%;">
<!--TABELA -->
<table class="table table-hover">
<thead style=" border-bottom: none !important;">

<tr>
  
<td>LOGO</td>
<td>ESCOLA</td>
<td>ENTRAR</td>
<td>EDITAR</td>
<td>DELETAR</td>


</tr>
  
</thead>  


<tbody>
  
<tr>

<td><img width="50" src="../imagens/sejuve_logo.png"></td>

<td>EEEP Alan Pinho Tabosa</td> 

<td style="text-align: center;"><a style="color:#000;" class="btn btn-success" href="#" ><i style="color: #fff;" class="fas fa-sign-in-alt"> </i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-primary" href="editar_escola.php" ><i style="color: #fff !important;" class="fas fa-edit"></i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-danger" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-trash"> </i></a></td>


</tr>





<tr>

<td><img width="50" src="../imagens/sejuve_logo.png"></td>

<td>EEEP Alan Pinho Tabosa</td> 

<td style="text-align: center;"><a style="color:#000;" class="btn btn-success" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-sign-in-alt"> </i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-primary" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff !important;" class="fas fa-edit"></i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-danger" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-trash"> </i></a></td>


</tr>




<tr>

<td><img width="50" src="../imagens/sejuve_logo.png"></td>

<td>EEEP Alan Pinho Tabosa</td> 

<td style="text-align: center;"><a style="color:#000;" class="btn btn-success" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-sign-in-alt"> </i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-primary" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff !important;" class="fas fa-edit"></i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-danger" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-trash"> </i></a></td>


</tr>




<tr>

<td><img width="50" src="../imagens/sejuve_logo.png"></td>

<td>EEEP Alan Pinho Tabosa</td> 

<td style="text-align: center;"><a style="color:#000;" class="btn btn-success" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-sign-in-alt"> </i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-primary" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff !important;" class="fas fa-edit"></i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-danger" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-trash"> </i></a></td>


</tr>



<tr>

<td><img width="50" src="../imagens/sejuve_logo.png"></td>

<td>EEEP Alan Pinho Tabosa</td> 

<td style="text-align: center;"><a style="color:#000;" class="btn btn-success" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-sign-in-alt"> </i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-primary" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff !important;" class="fas fa-edit"></i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-danger" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-trash"> </i></a></td>


</tr>



<tr>

<td><img width="50" src="../imagens/sejuve_logo.png"></td>

<td>EEEP Alan Pinho Tabosa</td> 

<td style="text-align: center;"><a style="color:#000;" class="btn btn-success" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-sign-in-alt"> </i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-primary" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff !important;" class="fas fa-edit"></i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-danger" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-trash"> </i></a></td>


</tr>



<tr>

<td><img width="50" src="../imagens/sejuve_logo.png"></td>

<td>EEEP Alan Pinho Tabosa</td> 

<td style="text-align: center;"><a style="color:#000;" class="btn btn-success" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-sign-in-alt"> </i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-primary" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff !important;" class="fas fa-edit"></i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-danger" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-trash"> </i></a></td>


</tr>



<tr>

<td><img width="50" src="../imagens/sejuve_logo.png"></td>

<td>EEEP Alan Pinho Tabosa</td> 

<td style="text-align: center;"><a style="color:#000;" class="btn btn-success" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-sign-in-alt"> </i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-primary" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff !important;" class="fas fa-edit"></i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-danger" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-trash"> </i></a></td>


</tr>



<tr>

<td><img width="50" src="../imagens/sejuve_logo.png"></td>

<td>EEEP Alan Pinho Tabosa</td> 

<td style="text-align: center;"><a style="color:#000;" class="btn btn-success" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-sign-in-alt"> </i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-primary" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff !important;" class="fas fa-edit"></i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-danger" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-trash"> </i></a></td>


</tr>



<tr>

<td><img width="50" src="../imagens/sejuve_logo.png"></td>

<td>EEEP Alan Pinho Tabosa</td> 

<td style="text-align: center;"><a style="color:#000;" class="btn btn-success" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-sign-in-alt"> </i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-primary" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff !important;" class="fas fa-edit"></i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-danger" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-trash"> </i></a></td>


</tr>



<tr>

<td><img width="50" src="../imagens/sejuve_logo.png"></td>

<td>EEEP Alan Pinho Tabosa</td> 

<td style="text-align: center;"><a style="color:#000;" class="btn btn-success" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-sign-in-alt"> </i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-primary" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff !important;" class="fas fa-edit"></i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-danger" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-trash"> </i></a></td>


</tr>



<tr>

<td><img width="50" src="../imagens/sejuve_logo.png"></td>

<td>EEEP Alan Pinho Tabosa</td> 

<td style="text-align: center;"><a style="color:#000;" class="btn btn-success" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-sign-in-alt"> </i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-primary" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff !important;" class="fas fa-edit"></i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-danger" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-trash"> </i></a></td>


</tr>



<tr>

<td><img width="50" src="../imagens/sejuve_logo.png"></td>

<td>EEEP Alan Pinho Tabosa</td> 

<td style="text-align: center;"><a style="color:#000;" class="btn btn-success" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-sign-in-alt"> </i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-primary" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff !important;" class="fas fa-edit"></i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-danger" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-trash"> </i></a></td>


</tr>



<tr>

<td><img width="50" src="../imagens/sejuve_logo.png"></td>

<td>EEEP Alan Pinho Tabosa</td> 

<td style="text-align: center;"><a style="color:#000;" class="btn btn-success" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-sign-in-alt"> </i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-primary" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff !important;" class="fas fa-edit"></i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-danger" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-trash"> </i></a></td>


</tr>



<tr>

<td><img width="50" src="../imagens/sejuve_logo.png"></td>

<td>EEEP Alan Pinho Tabosa</td> 

<td style="text-align: center;"><a style="color:#000;" class="btn btn-success" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-sign-in-alt"> </i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-primary" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff !important;" class="fas fa-edit"></i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-danger" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-trash"> </i></a></td>


</tr>


<tr>

<td><img width="50" src="../imagens/sejuve_logo.png"></td>

<td>EEEP Alan Pinho Tabosa</td> 

<td style="text-align: center;"><a style="color:#000;" class="btn btn-success" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-sign-in-alt"> </i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-primary" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff !important;" class="fas fa-edit"></i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-danger" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-trash"> </i></a></td>


</tr>



<tr>

<td><img width="50" src="../imagens/sejuve_logo.png"></td>

<td>EEEP Alan Pinho Tabosa</td> 

<td style="text-align: center;"><a style="color:#000;" class="btn btn-success" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-sign-in-alt"> </i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-primary" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff !important;" class="fas fa-edit"></i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-danger" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-trash"> </i></a></td>


</tr>



<tr>

<td><img width="50" src="../imagens/sejuve_logo.png"></td>

<td>EEEP Alan Pinho Tabosa</td> 

<td style="text-align: center;"><a style="color:#000;" class="btn btn-success" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-sign-in-alt"> </i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-primary" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff !important;" class="fas fa-edit"></i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-danger" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-trash"> </i></a></td>


</tr>



<tr>

<td><img width="50" src="../imagens/sejuve_logo.png"></td>

<td>EEEP Alan Pinho Tabosa</td> 

<td style="text-align: center;"><a style="color:#000;" class="btn btn-success" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-sign-in-alt"> </i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-primary" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff !important;" class="fas fa-edit"></i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-danger" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-trash"> </i></a></td>


</tr>




















</tbody>
</table>
<!--FECHA TABELA-->
</div>


<div class="bg_form_2">
<!--BTN DE ATIVAR O MODAL DE CADASTRAR ESCOLA-->
<button class="btn btn-success" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg" style="float: right;border-radius:50px;margin-top: 20px;width: 170px; "> Adicionar Escola</button>
</div>



<!--MODAL DE CADASTRAR ESCOLA-->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style=" background-color: #fff !important;color: #151719 ;border:none;">
        <h3 class="modal-title" id="exampleModalLabel">Cadastrar Equipe</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <img width="15" src="../imagens/sistema/toast/close.png">
        </button>
      </div>
      <div class="modal-body">

<form  enctype="multipart/form-data">

<!-- G_I_1  2 Inputs em uma linha -->
<div class="form-row">
<div class="col ">
<label>Nome da Escola:</label>
<br>
<input type="text" name="nomeequipe" class="form-control">
<br>
</div>


<div class="col">   
<label>Logo da Escola:</label>
<br>
<input type="file" class="" id="real-file" name="logoequipe"  hidden="hidden" >
<button class="btn btn-primary" type="button" id="custom-button" ><i class="fas fa-folder"></i>  Selecionar Arquivo</button>
<span id="custom-text" style="color: #000;">  Nenhum Arquivo selecionado.</span>
<br>
</div>
</div>
<!--FECHA AQUI G_I_1-->


<!-- G_I_2  2 Inputs em uma linha -->
<div class="form-row">
<div class="col">
<label>Nome do Diretor:</label>
<br>
<input type="text" name="nomeresponsavel" class="form-control">
<br>
</div>


<div class="col">
<label>INEP:</label>
<div class="input-group">
<br>
<div class="input-group-prepend">
<span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-id-badge"></i></span>
</div>
<input type="text" class="form-control" name="rgresponsavel" id="rg" placeholder="000.000.000-0" aria-describedby="inputGroupPrepend2" required>
</div>
</div>
</div>
<!--FECHA AQUI G_I_2-->


<!-- G_I_3  2 Inputs em uma linha -->
<div class="form-row">
<div class="col">
<label>Naturalidade:</label>
<div class="input-group">
<br>
<div class="input-group-prepend">
<span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-map-marker-alt"></i></span>
</div>
<input type="text" class="form-control" name="naturalidade" id="validationDefaultUsername" placeholder="Brasil" aria-describedby="inputGroupPrepend2" required>
</div>
</div>


<div class="col">
<label>Endereço:</label>
<div class="input-group">
<br>
<div class="input-group-prepend">
<span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-map-marked-alt"></i></span>
</div>
<input type="text" class="form-control" name="endereco" id="validationDefaultUsername" placeholder="Rua" aria-describedby="inputGroupPrepend2" required>
</div>
</div>
</div>
<!--FECHA AQUI G_I_3-->

<!-- G_I_4  2 Inputs em uma linha -->
<div class="form-row">
<div class="col ">
<label>E-mail:</label>
<div class="input-group">
<br>
<div class="input-group-prepend">
<span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-envelope"></i></span>
</div>
<input type="email" class="form-control" name="email" id="validationDefaultUsername" placeholder="exemplo@email.com" aria-describedby="inputGroupPrepend2" required>
</div>
</div>


<div class="col">
<label>Telfone:</label>
<div class="input-group">
<br>
<div class="input-group-prepend">
<span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-phone"></i></span>
</div>
<input id="telefone" type="text" class="form-control" name="telefone"  id="telefone" placeholder="(00) 00000-0000" aria-describedby="inputGroupPrepend2" required>
</div>
</div>
</div>
<!--FECHA AQUI G_I_4-->

<!-- G_I_5  2 Inputs em uma linha -->
<div class="form-row">
<div class="col ">
<label>Login:</label>
<div class="input-group">
<br>
<div class="input-group-prepend">
<span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-user"></i></span>
</div>
<input type="text" class="form-control" name="login" id="validationDefaultUsername" placeholder="Login" aria-describedby="inputGroupPrepend2" required>
</div>
</div>


<div class="col">
<label>Senha:</label>
<div class="input-group">
<br>
<div class="input-group-prepend">
<span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-lock"></i></span>
</div>
<input type="text" class="form-control" name="senha" id="validationDefaultUsername" placeholder="Senha" aria-describedby="inputGroupPrepend2" required>
</div>
</div>
</div>
<!--FECHA AQUI G_I_5-->

<!-- BOTÃO CADASTRAR DO FORM -->
<button  type="submit" name="cadastrar" class="btn btn-success" style="float: right;border-radius: 50px;width:170px;margin: 10px;margin-top:20px; " >Cadastrar</button>
<!-- FECHA O BTN DO FORM-->


</form>
</div>
</div>
</div>
</div>
<!--FECHA MODAL CADASTRAR-->

</div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
