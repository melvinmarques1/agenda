
<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Painel de controle - Apoio FAC4</title>  
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
           <div class="col-md-4">
  </div>
  <?php

    session_start();

    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);

    echo '<div class="container alert alert-success"><strong>Obrigado por usar este sistema, até a próxima!</strong></div>';

?>
<center>
<a href="indexlogin.php"><button type="button" class="btn btn-warning">Voltar para o Painel de Controle</button></a>
<a href="index.php"><button type="button" class="btn btn-warning">Ir para Agenda Cogna</button></a>
</center>
 <div class="col-md-4">
  </div><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
  

<center><h4>Desenvolvido pelo Apoio TI-FAC4</h4></center>
   

      </body> 
      <!--Folha de estilo-->
      <style type="text/css">
      .notice{
      	padding: 20px;

      }
  #container {
        background-color: white;
        border-radius: 10px 20px 30px;
        position: center;
        border: 1px solid black;
        padding:10px;
      }
        
            a:link, a:visited, a:hover, a:active{
              color:white;
            }
      </style> 
 </html>  
 <!--Idealizado e programado por:Melvin Marques 
Apoio na programação: Marcio Oliveira 
            07/2019
  Agradeçemos pelo apoio e utilização deste sistema, criado totalmente para melhor atendimento ao aluno e professor
-->