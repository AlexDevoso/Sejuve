<?php
session_start();
include "../funcoes/conexao.php";
include "../funcoes/verifica_login_adm.php";
include "../funcoes/mensagem.php";
 
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

    <!--Icons -->
      <link href="fontawesome/css/all.css" rel="stylesheet">

      <!--Icons -->
      <link href="fontawesome/css/all.css" rel="stylesheet">

        <!-- Awesome fonts -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


        <!-- Awesome fonts -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

        <link rel="shortcut icon" type="image/x-icon" href="../imagens/sistema/fav_icon/fav_icon.ico">

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400" rel="stylesheet">

<style type="text/css">


     html,body {
    overflow: hidden;
  }
 
  

  nav {
 background: #2F80ED;

  }

  .btn.focus, .btn:focus {

    outline: 0;
    box-shadow: none !important;

}

a {

  color: #fff !important;
}

a:hover {
  color: #fff !important;
}

a#idzin:hover {
background-color: #2279f0 !important;



}


#voltar:hover {
   width: 50px !important;
   text-align: center;
   border-radius: 50px;
   background-color:#1372f2;
   text-decoration:none;

 
}

#voltar {
   width: 50px !important;
   text-align: center;
   text-decoration:none;
}



.bg_form_2 {
width: 80%;
margin-right: auto; 
margin-left: auto;

}

.btn-verde {
  background: #38ef7d !important;  /* fallback for old browsers */


color: #fff;
border-radius: 50px !important;
border: none;
height: 50px;
font-size: 18px;
width: 200px !important;


}


.table td, .table th {

    border-top: none!important;

}

td {
  text-align: center !important;
}


.pesquisar_input {
  margin: 0px !important;
  border: none;
  padding: 5px;
  border-radius: 5px;
  background-color:#5999f1;
  
  color: #fff;
 
  width: 30%;
  height: 40px;


}


.pesquisar_input input,button {

    color: #fff !important;

}

.table th {
  border-bottom: none!important;
  font-weight: 600;
  text-align: center !important; 

}



html, body {
  overflow: hidden;
}

#nav_sejuve:hover {

text-decoration:none;
 }



  @media (max-width: 576px) { 

#bg_ {
  height: 10% !important;
  width: 90% !important;

  
}

#img_ {
margin: 0px;
width: 30px;
}

#txt_ {
  font-size: 15px;
}

#tb_ {
  width: 90% !important;

}

 }







</style>


  <title>Atletas</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  
<script type="text/javascript">
  $(document).ready(function(){
  $('.toast').toast('show');
});
</script>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="" id="sidebar-wrapper" style="background-color: #2F80ED;
">
      <div class="sidebar-heading text-white">
        
                <div style="display: flex;">
        <img width="50" src="../imagens/sejuve_logo.png" style="float: left ;"><h2 style="float: right !important;">Sejuve</h2>
</div>


      </div>
      <div class="list-group list-group-flush  ">
        <a id="idzin" href="area_adm.php" class="list-group-item list-group-item-action" style="background-color:rgba(255, 255, 255, 0.0); font-size: 18px;display: flex;justify-content: left;align-items: center;"><img width="20" height="20" src="../imagens/menu_icones/home2_.png" style="margin-right: 10px;">    Home</a>

        <a id="idzin" href="lista_de_eventos.php" class="list-group-item list-group-item-action" style="background-color: rgba(255, 255, 255, 0.0); font-size: 18px;display: flex;justify-content: left;align-items: center;"><img width="20" height="20" src="../imagens/menu_icones/competicao.png" style="margin-right: 10px;">  Eventos</a>

        <a id="idzin" href="atletas_database.php" class="list-group-item list-group-item-action" style="background-color: rgba(255, 255, 255, 0.0); font-size: 18px;display: flex;justify-content: left;align-items: center;"><img width="20" height="20" src="../imagens/menu_icones/usu_.png" style="margin-right: 10px;">  Atletas</a>

        <a id="idzin" href="../interface/home_jogos_escolares_adm.php" class="list-group-item list-group-item-action" style="background-color: rgba(255, 255, 255, 0.0); font-size: 18px;display: flex;justify-content: left;align-items: center;"><img width="20" height="20" src="../imagens/menu_icones/list_.png" style="margin-right: 10px;">  Jogos Escolares</a>

         <a id="idzin" href="../funcoes/logout.php" class="list-group-item list-group-item-action" style="background-color: rgba(255, 255, 255, 0.0); font-size: 18px;display: flex;justify-content: left;align-items: center;"><img width="20" height="20" src="../imagens/menu_icones/off.png" style="margin-right: 10px;">  Sair</a>

    

      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">











            <nav class="navbar">
        
<button style="background: rgb(0, 0, 0) transparent !important;" class="btn " id="menu-toggle" style="font-size: 20px;"> <i style="color: #fff;font-size: 20px;" class="fas fa-bars"></i></button>


     <form style="width: 40%;" class="" method="GET">
    
     <div style="display: flex;">
      <input   class="pesquisar_input" name="pesquisa"  type="search" placeholder="Pesquisar" aria-label="Search" style="margin: 10px;float:  !important;width: 100%;">
      <button id="btn_pesquisar" style="float:  !important;" class="btn" type="submit" name="procurar"><i class="fas fa-search"style="color: #fff" ></i></button>
    </div>
   </form>









    

        
              <a id="voltar"  href="#" style="float: right;">Voltar</a>
        
          
        
          


      </nav>

















<br>
<center><h1>Atletas Base de Dados</h1></center>
<br>


<div id="bg_" style="width: 95%;margin-left: 20px;margin-right: 20px;border-radius: 5px;margin-top: 20px;padding: 20px;" class="shadow">

<div style="display: flex;align-items: center;justify-content: center;"> <img id="img_" width="50" src="../imagens/sistema/atletas_database/database.png" style="margin: 10px;"> 
<h2 id="txt_" style="margin: 10px;">Pesquise para achar o atleta desejado.</h2>

</div>

  </div>


<div id="tb_" style="width: 95%;height: 30%!important; overflow-y: auto;overflow-x: auto;margin-left: 20px;margin-right: 20px;border-radius: 5px;margin-top: 20px;" class="shadow">















<div class="">
<table class="table table-hover">
  <thead>
    <tr>
    <th>FOTO</th>
    <th>NOME</th>
    <th>RG</th>
    <th>TIME</th>
    <th>NATURALIDADE</th>
    <th>EQUIPE</th>
    <th>EDITAR</th>
    <th>EXCLUIR</th>
    <th>IMPRIMIR</th>
</tr>



  </thead>

  <tbody>
    

<?php 
  if(isset($_GET['procurar'])){
  $nome = $_GET['pesquisa'];
  $mostraratletas = "SELECT * from atleta join equipe on equipeid_fk = equipeid where nome_atleta like '%$nome%'";
  $resultado = mysqli_query($conexao, $mostraratletas);
  while($dadosatletas = mysqli_fetch_array($resultado)){
  
?>

 <tr class="tr_">


<td><?php echo "<img style='margin-bottom:20px;' width='50' src='../imagens/".$dadosatletas['imagem_rg']."'/>"; ?></td>
<td><?php echo $dadosatletas['nome_atleta'] ;?> </td>
<td> <?php echo $dadosatletas['data_nascimento_atleta'] ;?> </td>
<td> <?php echo $dadosatletas['rg_atleta'] ;?> </td>
<td> <?php echo $dadosatletas['naturalidade_atleta'] ;?> </td>
<td> <?php echo $dadosatletas['nomeequipe'] ;?> </td>
<td>


<a class="btn btn-primary" href="editar_atleta_form.php?atletaid=<?php echo $dadosatletas['atletaid']?>"><i class="fas fa-edit" style="color: #fff;"></i></a>

</td>




<form action="../funcoes/deletar_atleta.php" method="POST">
  <input type="hidden" name="atletaid" value="<?php echo $dadosatletas['atletaid'] ?>">
<td> <button type="submit" class="btn btn-danger"a name="delete"><i class="fas fa-trash"></i></button>
</td>
</form>
   

   
   
  

<td>
<button class="btn btn-dark">
  <i class="fas fa-print" style="color: #fff;"></i>
</button></td>



</tr>




  





<?php 

}
}
?>

  </tbody>









  
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
