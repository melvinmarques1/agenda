<?php
    session_start();

    if(!$_SESSION['usuario']){
        header('Location: indexlogin.php?erro=1');
    }
?>
<?php  
   include('phpconect.php');
 $query ="SELECT `Professor`,`Sala`,`Disciplina`,`Curso`,`Dia`,`Obs`  FROM `reservas` ORDER BY `id` DESC";  
 $result = mysqli_query($con, $query)or die(mysqli_error($con)); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Controle - Apoio FAC4</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
       <script type="text/javascript">
      function exibeMenuImportar(id) {
          $('#'+id).show();
      }
      function ocultaMenuImportar(id) {
          $('#'+id).hide();
      }
      function ocultaInicio(id) {
          $('#'+id).hide();
      }
  </script>
      </head> 
       
     <body onload="ocultaInicio('imp');">
        <!-- Static navbar -->
      <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="indexpainel.php"><img src="logoprojetoagenda2.png" width="100" /></a>
          </div>
          
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li onmouseover="exibeMenuImportar('imp');" onmouseout="ocultaMenuImportar('imp');"><a href="registrodesalas.php">Reservar</a></li>
              <li id="imp" onmouseover="exibeMenuImportar('imp');" onmouseout="ocultaMenuImportar('imp');"><a href="importar.php">Importar reservas</a></li>
              <li><a href="historico.php">Salas e Labs</a></li>
              <li><a href="sair.php">Sair</a></li>
            </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>
<!--Aqui começa a div com o conteudo-->
    <center><img src="logoprojetoagendaadm.png" width="350"/> <br /></center>
   
<font face="Georgia"> 
           <br /><br />  
           <div id="container" class="container"> 

          <a href="editardados.php"><button class="btn btn-danger" type="button">Editar</button></a>
                <h3 align="center">Controle das salas e laborátorios</h3> <br/>
                <center><em>Veja o histórico completo das reservas feitas. Acompanhe quais salas estão ocupadas ou não.</em></center>
                <br />  
                <ul class="nav nav-tabs">
                   <li class="nav-item">
                  <a class="nav-link active" href="historico.php">Geral</a>
                       </li>
                    <li class="nav-item">
                    <a class="nav-link" href="salash.php">Salas e Laboratórios</a>
                       </li>
                       <li class="nav-item">
                    <a class="nav-link" href="mapageral.php">Mapa da faculdade(Em breve)</a>
                       </li>
                 </ul>
                 <br>
                <div class="table-responsive"> 
<img src="blocoADM.png" style="width: 200px"> <img src="blocoA.png" style="width: 400px"> <img src="blocoB.png" style="width: 200px">
                </div>  
           </div>
           <div>
<center><h4>Desenvolvido pelo Apoio TI-FAC4</h4></center>
   </div>  
      </body> 
      <!--Folha de estilo-->
      <style type="text/css">
      
  #container {
        background-color: white;
        border-radius: 10px 20px 30px;
        position: ;
        border: 1px solid black;
        padding:10px;
      }
        body {
              background: -webkit-gradient(linear, right top, left top, from(#FF8000), to(#FFFFFF));
                 
            }
             a:visited, a:hover{
              color:white;
            }
            a:link, a:visited{
              color: black;
            }
            nav-item{
              background-color: black;
            }

      </style> 
 </html>  
   
<!--Idealizado e programado por:Melvin Marques 
Apoio na programação: Marcio Oliveira 
            07/2019
  Agradeçemos pelo apoio e utilização deste sistema, criado totalmente para melhor atendimento ao aluno e professor
-->