
<?php
  session_start();

  include "../funcoes/conexao.php";
  include "../funcoes/verifica_login_adm.php";
  include "../funcoes/mensagem.php";
?>

<?php
  
  if (isset($_GET['idevento'])) {
  $idevento = mysqli_escape_string($conexao, $_GET['idevento']);
  $_SESSION['id'] = $idevento;
  $a = $_SESSION['id'];
  $sql = "SELECT * FROM evento where idevento = '$idevento'";
  $resultado = mysqli_query($conexao, $sql);
  
}
else{
  $a = $_SESSION['id'];
  $sql = "SELECT * FROM evento where idevento = '$a'";
  $resultado = mysqli_query($conexao, $sql);
}


  //mostrar login
        $sql2 = "SELECT * from equipe_evento JOIN equipe
          on equipeid_fk = equipeid where idevento_fk = '$a'";
        $resultado2 = mysqli_query($conexao, $sql2);    
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

                       <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">


<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


<style type="text/css">
  

  nav {
background: #2F80ED;  
  }

    html,body {
    overflow: hidden;
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
   width: 100px !important;
   text-align: center;
   border-radius: 50px;
   background-color:#1372f2;
   text-decoration:none;

 
}

#voltar {
   width: 100px !important;
   text-align: center;
   text-decoration:none;
}


.bg_form_2 {
width: 50% !important;
margin-right: auto; 
margin-left: auto;

}

.btn-verde {
  background: #38ef7d !important;  


color: #fff;
border-radius: 50px !important;
border: none;
height: 50px;
font-size: 18px;
width: 200px !important;


}


.table td, .table th {

    border-top: none!important;
    border-bottom: none !important;

}

tr {

}

td {

  text-align: center !important;

}
th {
  text-align: center !important;
  font-weight: 600;
}

.bg_form {
  width: 80%;
  overflow-x: auto;
  overflow-y: auto;
  margin-left: auto;
  margin-right: auto;
  height: 30%;

}

#nav_sejuve:hover {

text-decoration:none;
 }







</style>


  <title>Equipes Cadastradas</title>



  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>
  <title>Lista de Eventos</title>
</head>
<body>
  
 

<script type="text/javascript">
  $(document).ready(function(){
  $('.toast').toast('show');
});
</script>








 <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="" id="sidebar-wrapper" style="background-color:#2F80ED;">
      <div class="sidebar-heading text-white">
        

        <div style="display: flex;">
        <img width="50" src="../imagens/sejuve_logo.png" style="float: left ;"><h2 style="float: right !important;">Sejuve</h2>
</div>

        
      </div>
      <div class="list-group list-group-flush  ">
        <a id="idzin" href="area_adm.php" class="list-group-item list-group-item-action" style="background-color: rgba(255,255,255,0.0); font-size: 18px;display: flex;justify-content: left;align-items: center;"><img width="20" height="20" src="../imagens/menu_icones/home2_.png" style="margin-right: 10px;">    Home</a>

        <a id="idzin" href="lista_de_eventos.php" class="list-group-item list-group-item-action" style="background-color: rgba(255,255,255,0.0); font-size: 18px;display: flex;justify-content: left;align-items: center;"><img width="20" height="20" src="../imagens/menu_icones/competicao.png" style="margin-right: 10px;">  Eventos</a>

        <a id="idzin" href="atletas_database.php" class="list-group-item list-group-item-action" style="background-color: rgba(255,255,255,0.0); font-size: 18px;display: flex;justify-content: left;align-items: center;"><img width="20" height="20" src="../imagens/menu_icones/usu_.png" style="margin-right: 10px;">  Atletas</a>

         
    

      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar">
        
<button style="background: rgb(0, 0, 0) transparent !important;" class="btn " id="menu-toggle" style="font-size: 20px;"> <i style="color: #fff;font-size: 20px;" class="fas fa-bars"></i></button>
<a id="nav_sejuve" href="#" style="font-size: 20px;font-weight: 700;">SEJUVE</a>



<a id="voltar"  href="../interface/lista_de_eventos.php" style="float: right;">Voltar</a>

      </nav>





<center>
    <h1>Equipes Cadastradas</h1>
  </center>



 <div class="bg_form shadow">
    <table class=" table table-hover">
      <thead class="">
        <tr class="">
          <th>LOGO</th>
          <th>NOME DA EQUIPE</th>
          <th>NOME DO RESPONSÁVEL</th>
          <th>RG</th>
          <th>NATURALIDADE</th>
          <th>E-MAIL</th>
          <th>TELEFONE</th>
          <th>ENDEREÇO</th>
          <th>LOGIN</th>
          <th>SENHA</th>
          <th>EDITAR</th>
          <th>EXCLUIR</th>
          <th>Relatório</th>
       
        </tr>
      </thead>

      <tbody>
        <?php
        
        while ($dados2 = mysqli_fetch_array($resultado2)) {
          $iddelete = $dados2['equipeid'];
          ?>
          <tr class="active-row">

           <td><?php echo "<img width='50' src='../imagens/".$dados2['logoequipe']."'/>";?></td>
            <td class=".zui-sticky-col "><?php echo $dados2['nomeequipe'] ?></td>
            <td><?php echo $dados2['nomeresponsavel'] ?></td>
            <td><?php echo $dados2['rgresponsavel'] ?></td>
            <td><?php echo $dados2['naturalidade'] ?></td>
            <td><?php echo $dados2['email'] ?></td>
            <td><?php echo $dados2['telefone'] ?></td>
            <td><?php echo $dados2['endereco'] ?></td>
            <td><?php echo $dados2['login'] ?></td>
            <td><?php echo $dados2['senha'] ?></td>


<td style="text-align: center;">
<a class="btn btn-primary"  href="editar_equipe_form.php?equipeid=<?php echo $dados2['equipeid']; ?>">
<i style="color: #fff !important;" class="fas fa-pen"></i>
</a>
</td>


<form action="../funcoes/deletar_equipe.php" method="POST" >
            <input type="hidden" name="equipeid" value="<?php echo $dados2['equipeid'] ?>">
       <td><button class="btn btn-danger" type="submit" name="delete"><i style="color: #fff !important;" class="fas fa-trash" ></i></button></td>
          </form>





         










<td style="text-align: center;">
<a class="btn btn-dark"  href="../funcoes/gerarpdf_adm.php?equipeid=<?php echo $dados2['equipeid']; ?>">
<i style="color: #fff;" class="fas fa-print"></i>
</a></td>
</tr>


        <?php } ?>
      </tbody>
    </table>

    
  </div>

  <div style=" margin-left: auto;
  margin-right: auto;width: 80%;padding-top: 20px;">
  <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg" style="width: 170px;border-radius: 50px;float: right;">Nova Equipe</button>
</div>
</div>



</div>











  













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
     




<form action="../funcoes/cadastrar_equipe.php" method="POST" enctype="multipart/form-data">
<?php
  while($dados = mysqli_fetch_array($resultado)){
 ?>
<input type="hidden" name="idevento" value="<?php echo $dados['idevento'] ;?>">

<?php
  } 
 ?> 


  <div class="form-row">
    <div class="col ">
    

      <label>Nome da Equipe:</label>
<br>
<input type="text" name="nomeequipe" class="form-control">
<br>
    </div>
    <div class="col">
      


      <label>Logo da Equipe:</label>
<br>





 <input type="file" class="" id="real-file" name="logoequipe"  hidden="hidden" >
  <button class="btn btn-primary" type="button" id="custom-button" ><i class="fas fa-folder"></i>  Selecionar Arquivo</button>
 <span id="custom-text" style="color: #000;">  Nenhum Arquivo selecionado.</span>

 <br>

    </div>
  </div>






<div class="form-row">
    <div class="form-group col-md-6">
      <label>Nome do Responsável:</label>
<br>
<input type="text" name="nomeresponsavel" class="form-control">
<br>
</div>



<div class="form-group col-md-6">



<label>RG do Responsável:</label>
<div class="input-group">

          <br>
        <div class="input-group-prepend">

          <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-id-badge"></i></span>
        </div>
        
        <input type="text" class="form-control" name="rgresponsavel" id="rg" placeholder="000.000.000-0" aria-describedby="inputGroupPrepend2" required>
      </div>



</div>

    </div>
  





<div class="form-row">

<div class="form-group col-md-6">
  

<label>Naturalidade:</label>
<div class="input-group">

          <br>
        <div class="input-group-prepend">

          <span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-map-marker-alt"></i></span>
        </div>
        
        <input type="text" class="form-control" name="naturalidade" id="validationDefaultUsername" placeholder="Brasil" aria-describedby="inputGroupPrepend2" required>
      </div>



</div>



<div class="form-group col-md-6">

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

          <span class="input-group-text" id="inputGroupPrepend2">

            <i class="fas fa-lock"></i></span>
        </div>
        
        <input type="text" class="form-control" name="senha" id="validationDefaultUsername" placeholder="Senha" aria-describedby="inputGroupPrepend2" required>
      </div>













  <button  type="submit" name="cadastrar" class="btn btn-success" style="float: right;border-radius: 50px;width:170px;margin: 10px;margin-top:20px; " >  Cadastrar</button>



</form>

</div>







     
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

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <script type="text/javascript">
     $(document).ready(function(){
      $("#rg").mask("999.999.999-W", {
        translation: {
          'W': {
            pattern: /[X0-9]/
          }
        },
        reverse: true
      }) });  


    </script>

 <script type="text/javascript">
   
   $(document).ready(function(){
$('#telefone').mask('(00) 00000-0000');

   });

 </script>









</div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->



  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>






































































</body>
</html>