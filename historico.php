<?php
    session_start();

    if(!$_SESSION['usuario']){
        header('Location: indexlogin.php?erro=1');
    }
?>
<?php  
   include('phpconect.php');
 $query ="SELECT `Curso`,`Sala`,`Professor`,`Turma`,`Disciplina`,`Dia`,`Criada`  FROM `reservas` ORDER BY `id` DESC";  
 $result = mysqli_query($con, $query)or die(mysqli_error($con)); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Controle - Apoio FAC4</title>  
           <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans+Condesed:300,700">
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
       <link href="/fontawesome/css/all.css" rel="stylesheet">
            
      </head> 
       
     <body onload="ocultaInicio('imp','load');">
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
           <div id="container"  class="container"> 

          <a href="editardados.php"><button class="btn btn-danger" type="button" >Editar <i class="far fa-edit"></i></button></a>
          <a href="gerarpdf.php"><button  id="button" class="btn btn-warning" type="button" >Gerar relatório <i class="far fa-file-alt"></i></button></a>
          
                <h3 align="center">Controle das salas e laborátorios</h3> <br/>
                <center><em>Veja o histórico completo das reservas feitas. Acompanhe quais salas estão ocupadas ou não.</em></center>
                <br />  
                <ul class="nav nav-tabs">
                   <li class="nav-item">
                  <a class="nav-link " href="historico.php">Geral</a>
                       </li>
                    <li class="nav-item">
                    <a class="nav-link" href="salash.php">Salas</a>
                       </li>
                        </li>
                       <li class="nav-item">
                    <a class="nav-link" href="labs.php">Laboratórios</a>
                       </li>
                 </ul>
                 <br>
                <div class="table-responsive"> 
                <!---Tabela conectada ao banco de dados-->
                     <table id="employee_data" class="table table-hover table-responsive">  
                          <thead>  
                               <tr>  
                                    <td>Curso</td>
                                    <td>Sala</td>  
                                    <td>Disciplina</td>
                                    <td>Professor</td>
                                    <td>Turma</td>
                                    <td>Dia</td> 
                                    <td>Reserva feita em:</td> 
                                      
                                    
                                      
                               </tr>  
                          </thead>  
                         <?php while($row = mysqli_fetch_array($result))   
                               {  
                               echo '  
                               <tr>  
                                    <td>'.$row["Curso"].'</td>   
                                    <td>'.$row["Sala"].'</td> 
                                    <td>'.$row["Disciplina"].'</td>   
                                    <td>'.$row["Professor"].'</td> 
                                    <td>'.$row["Turma"].'</td> 
                                    <td>'.$row["Dia"].'</td>
                                    <td>'.$row["Criada"].'</td>  
                                    
                                    
                               </tr>  
                               ';  
                          }
                          ?>                              
                         
                     </table>  
                </div>  
           </div>
           <div>
             
           </div>
           <div>
<center><h4>Desenvolvido pelo Apoio TI-FAC4</h4></center>
   </div>  
      </body> 
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
  <script type="text/javascript">
      $(document).ready(function(){
       $("#button").click(function(){
          $(this).addClass("active");

          setTimeout(function(){
            $("#button").addClass("primary");
          }, 3700);
          setTimeout(function(){
            $("#button").removeClass("active");
            $("#button").removeClass("primary");
          }, 5000);
       });
      });
  </script>
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
  #button {
      
    transition: all ease 0.5;
  }
  .active{
    font-size: 0;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    border-left-color: transparent;
    
    animation: rotate 1.4s ease 0.5s infinite;
  }
  @keyframes rotate{
    0%{
      transform: rotate(360deg);
    }
  }
  .primary{
    position:relative;
    background-color: #fff;
    animation:bouce .3s ease-in;
  }
  @keyframes bouce{
    0%{
      transform: scale(0.9);
    }
    .primary:before{
      content:'';
      position: absolute;
      background: url('check-solid.svg')no-repeat;
      left: 0;
      right: 0;
      margin: 0 auto;
      width: 10px;
      height: 10px;
      line-height: 10px;
      top: 0px;
    }
  }
      </style> 
      <script>
$(document).ready(function(){
$('#employee_data').DataTable();
});
</script>
 </html>  
 
 
<!--Idealizado e programado por:Melvin Marques 
Apoio na programação: Marcio Oliveira 
            07/2019
  Agradeçemos pelo apoio e utilização deste sistema, criado totalmente para melhor atendimento ao aluno e professor
-->