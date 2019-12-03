<?php
    session_start();

    if(!$_SESSION['usuario']){
        header('Location: indexlogin.php?erro=1');
    }
?>
<?php  
   include('phpconect.php');
 $query ="SELECT `Sala`,`status_sala`,`status_periodo`  FROM `cadastrosalas` ORDER BY `id_sala` DESC";  
 $result = mysqli_query($con, $query)or die(mysqli_error($con)); 
 ?> 
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Histórico - Apoio FAC4</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      <link href="/fontawesome/css/all.css" rel="stylesheet">
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
            <a href="indexpainel.php"><img src="logominiagenda.png" width="100" style="padding-top: 10px;" /></a>
          </div>
          
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li onmouseover="exibeMenuImportar('imp');" onmouseout="ocultaMenuImportar('imp');"><a href="registrodesalas.php"><i class="far fa-calendar-check"></i> Reservar</a></li>
              <li id="imp" onmouseover="exibeMenuImportar('imp');" onmouseout="ocultaMenuImportar('imp');"><a href="importar.php"><i class="fas fa-upload"></i> Importar reservas</a></li>
              <li><a href="historico.php"><i class="fas fa-chalkboard-teacher"></i> Salas e Labs</a></li>
              <li><a href="sair.php"><i class="fas fa-door-open"></i> Sair</a></li>
            </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>
<!--Aqui começa a div com o conteudo-->
    <center><img src="logoagendacognav3.png" width="300" style="padding-bottom: 50px;" /> <br /></center>
   
<font face="Georgia"> 
           <br /><br />  
           <div id="container" class="container"> 

          <a href="editardados.php"><button class="btn btn-danger" type="button" >Editar <i class="far fa-edit"></i></button></a> <a href="gerarpdf.php"><button  id="button" class="btn btn-warning" type="button" >Gerar relatório <i class="far fa-file-alt"></i></button></a>
                <h3 align="center">Histórico das salas reservadas</h3> 
                <br />  
                <ul class="nav nav-tabs">
                   <li class="nav-item">
                  <a class="nav-link active" href="historico.php">Geral</a>
                       </li>
                    <li class="nav-item">
                    <a class="nav-link" href="salash.php">Salas</a>
                       </li>
                       <li class="nav-item">
                    <a class="nav-link" href="labs.php">Laboratórios</a>
                       </li>
                 </ul>
                 <br>
                
 <div class="table-responsive"> 
                <!---Tabela conectada ao banco de dados-->
                     <table id="employee_data" class="table table-hover">  
                          <thead>  
                               <tr>  
                                    
                                     
                                    <td>Sala</td>  
                                    <td>Status</td>
                                    <td>Periodo</td>  
                                     
                               </tr>  
                          </thead>  
                         <?php while($row = mysqli_fetch_array($result))   
                               {  
                               echo '  
                               <tr>  
                                     
                                    <td>'.$row["Sala"].'</td> 
                                    <td>'.$row["status_sala"].'</td> 
                                    <td>'.$row["status_periodo"].'</td> 
                                    
                               </tr>  
                               ';  
                          }
                          ?>                              
                         
                     </table>  
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
 
 <script>  
  //Script para a tabela
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script>  
 <!--Feito por:Melvin Marques e Marcio Oliveira 07/2019
  Agradeçemos pelo apoio e utilização deste sistema, criado totalmente para melhor atendimento ao aluno e professor
-->