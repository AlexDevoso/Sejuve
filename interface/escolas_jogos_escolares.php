<?php
session_start();
include "../funcoes/conexao.php";

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
 background: #396afc; 
background: -webkit-linear-gradient(to right, #2948ff, #396afc); 
background: linear-gradient(to right, #2948ff, #396afc); 


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

background-color: #4f63db !important;




}


#voltar:hover {
   width: 100px !important;
   text-align: center;
   border-radius: 50px;
   background-color: #445df2;

 
}

#voltar {
   width: 100px !important;
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



#nav_sejuve:hover {

text-decoration:none;
 }







</style>


  <title>Escolas - Jogos Escolares</title>

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
    <div class="" id="sidebar-wrapper" style="background-color: #2948ff;">
      <div class="sidebar-heading text-white">Sejuve</div>
      <div class="list-group list-group-flush  ">
        <a id="idzin" href="home_jogos_escolares_usuario.php" class="list-group-item list-group-item-action" style="background-color: rgba(255, 255, 255, 0.0);font-size: 18px;display: flex;justify-content: left;align-items: center;"><img width="20" height="20" src="../imagens/menu_icones/home2_.png" style="margin-right: 10px;">    Home</a>

        <a id="idzin" href="escolas_jogos_escolares.php" class="list-group-item list-group-item-action" style="background-color: rgba(255, 255, 255, 0.0);font-size: 18px;display: flex;justify-content: left;align-items: center;"><img width="20" height="20" src="../imagens/menu_icones/notebook.png" style="margin-right: 10px;">    Escolas</a>

      

        <a id="idzin" href="cadastrar_escola_je.php" class="list-group-item list-group-item-action" style="background-color: rgba(255, 255, 255, 0.0); font-size: 18px;display: flex;justify-content: left;align-items: center;"><img width="20" height="20" src="../imagens/menu_icones/usu_.png" style="margin-right: 10px;">  Alunos</a>

        <a id="idzin" href="modalidades.php" class="list-group-item list-group-item-action" style="background-color: rgba(255, 255, 255, 0.0); font-size: 18px;display: flex;justify-content: left;align-items: center;"><img width="20" height="20" src="../imagens/menu_icones/handball.png" style="margin-right: 10px;">  Modalidades</a>

         <a id="idzin" href="../funcoes/logout.php" class="list-group-item list-group-item-action" style="background-color: rgba(255, 255, 255, 0.0); font-size: 18px;display: flex;justify-content: left;align-items: center;"><img width="20" height="20" src="../imagens/menu_icones/off.png" style="margin-right: 10px;">  Sair</a>

    

      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

       <nav class="navbar">
        
<button style="background: rgb(0, 0, 0) transparent !important;" class="btn " id="menu-toggle" style="font-size: 20px;"> <i style="color: #fff;font-size: 20px;" class="fas fa-bars"></i></button>
<a id="nav_sejuve" href="#" style="font-size: 20px;font-weight: 700;">Jogos Escolares</a>



<a id="voltar"  href="../funcoes/logout.php" style="float: right;">Sair</a>

      </nav>























<center><h1>Escolas</h1></center>


<div style="width: 95%;height: 20%!important; overflow-y: auto;overflow-x: auto;margin-left: auto;margin-right: auto;border-radius: 5px;margin-top: 20px;" class="shadow">


  <table class="table table-hover">
    
<thead>
  <tr>

  <td>LOGO</td>
  <td>NOME</td>
  <td>INEP</td>
  <td>DIRETOR</td>
  <td>RESPONSÁVEL</td>
  <td>ENDEREÇO</td>
  <td>E-MAIL</td>
  <td>TELEFONE</td>
  <td>LOGIN</td>
  <td>SENHA</td>
  <td>EDITAR</td>
  <td>EXCLUIR</td> 






  </tr>



</thead>



<tbody>
  
  <tr>
    
<td><img width="50" src="../imagens/sistema/pre_def.jpg"></td>
<td>EEEP Alan Pinho Tabosa</td>
<td>23545380</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>

<td><a href="" class="btn btn-primary shadow"><i class="fas fa-pen"></i></a></td>
<td><a href="" class="btn btn-danger shadow"><i class="fas fa-trash"></i></a></td>

  </tr>

</tbody>





  </table>







  

</div>

<div style="width: 95%;margin-left: auto;margin-right: auto;margin-top: 20px;">

<button type="button"class="btn btn-success" style="width: 170px;border-radius: 50px;float: right;" data-toggle="modal" data-target=".bd-example-modal-lg">
 Nova Escola
</button>
  </div>





  <!-- Modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header" style="border: none !important;">
        <h2 class="modal-title" id="exampleModalLabel">Cadastrar Escola</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
        <img width="13" src="../imagens/sistema/toast/close.png">
        </button>
      </div>
      <div class="modal-body">
       





<form>


  <div class="form-row">


      <div class="col">
        <label>Nome Escola:</label>
        
        <input type="text" name="nome_escola" class="form-control">

      </div>


      <div class="col">
        
<label>INEP:</label>
<input type="text" name="inep" class="form-control">

      </div>



      <div class="col">
  
<label>Nome do Diretor:</label>
<input type="text" name="nome_diretor_escola" class="form-control">

</div>
  
    
  </div>

  <br>






  <div class="form-row">


<div class="col">
  
<label>Responsável pelo Cadastro:</label>
<input type="text" name="resp_cadastro_escola" class="form-control">

</div>








    
<div class="col">
  
<label>Endereço:</label>
<input type="text" name="endereco_escola" class="form-control">

</div>


<div class="col">
  
<label>E-mail:</label>
<input type="email" name="email_escola" class="form-control">

</div>




  </div>

  <br>











   <div class="form-row">
    
<div class="col">
  
<label>Telefone:</label>
<input type="text" name="telefone_escola" class="form-control">

</div>



<div class="col">

  <label>Login:</label>
<input type="text" name="login_escola" class="form-control">
</div>


<div class="col">
  
  <label>Senha:</label>
  <input type="text" name="senha_escola" class="form-control">
</div>

  </div>



<br>
  <div class="form-row">
    
<label>Logo do Evento:</label>

<div class="col">
<div style="display: flex;align-items: center;justify-content: center;">
  <img width="150" id="pre_img" src="../imagens/sistema/pre_img.png">

</div>

<br>

  <input type="file" class="" id="real-file" name="imagem_evento" onchange="previewImagem()" hidden="hidden" >
  <button class="btn btn-primary" type="button" id="custom-button" ><i class="fas fa-folder"></i>  Selecionar Arquivo</button>
 <span id="custom-text" style="color: #000;">  Nenhum Arquivo selecionado.</span>

</div>

  </div>

  <br>


  

<button type="button" class="btn btn-success" style="float: right;width: 170px;border-radius:50px ;">Salvar</button>



</form>






      </div>
      <div class="modal-footer" style="border: none;">
        
        
      </div>
    </div>
  </div>
</div>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    




    </div>
  </div>
</div>











 <script type="text/javascript">
      
const realFileBtn = document.getElementById('real-file');
const customBtn = document.getElementById('custom-button');
const customTxt = document.getElementById('custom-text');


customBtn.addEventListener('click',function() {

realFileBtn.click();

});


realFileBtn.addEventListener("change",function() {

if (realFileBtn.value) {

  customTxt.innerHTML = realFileBtn.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
} else {
customTxt.innerHTML ="Nenhum arquivo selecionado.";

}

});

    </script>



      <script>



            function previewImagem(){
                var imagem = document.querySelector('input#real-file').files[0];
                var preview = document.getElementById("pre_img");
                var reader = new FileReader();
                reader.onloadend = function(){
                    preview.src = reader.result;
                }
                if(imagem){
                    reader.readAsDataURL(imagem);
                }else{
                    preview.src = "";
                }
            }
    </script>






























      
  
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
