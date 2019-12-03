<?php
    session_start();

    if(!$_SESSION['usuario']){
        header('Location: indexlogin.php?erro=1');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Importação de reservas</title>
	

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
     <!-- Folha de estilo para div etc -->
		 <style>
		 	form {
		 		background-color: white;
				border-radius: 10px 20px 20px;
				position: ;
				border: 1px solid black;
				padding: 10px;
		 	}
		 </style>
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

    <center><img src="logoagendacognav3.png" width="300" style="padding-bottom: 50px;" /> <br /></center>
 
    <font face="Georgia">

	    <div class="container">
	    	
	    	<br /><br />
<!--Importação de reservas-->
	    	<div class="col-md-3"></div>
	    	<div class="col-md-6">
<center><H1> Importe aqui as reservas feitas </H1>

<form method="POST" action="processa2.php" enctype="multipart/form-data">
	
	<em>A importação deve ser feita de um arquivo do excel em .XML</em><br><br>
	<input type="file" name="arquivo"><br><br>
  
	<center><input class="btn btn-warning" type="submit" value="Enviar"></center>
	<br>
<div class="progress">
  <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" style="width: 0%">
    <span class="sr-only"></span>
  </div>

</form></center>
</div>
			<div class="col-md-4"></div>

			<div class="clearfix"></div>
			<br />
			

		</div>
<div>
<center><h4>Desenvolvido pelo Apoio TI-FAC4</h4></center>
   </div>

	    </div>
       <!-- jquery - link cdn -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!--Script para barra de progresso-->
    <script type="text/javascript">
//capitando ação
      $(document).on('submit', 'form', function(e) {
        e.preventDefault();
        //buscando os dados
        $form = $(this);
        var formdata = new FormData($form[0]);
//verificando progresso com o servidor
        var request = new XMLHttpRequest();
//enviar para a barra de progresso
        request.upload.addEventListener('progress', function(e){
            var percent = Math.round(e.loaded / e.total * 100);
            $form.find('.progress-bar').width(percent + '%').html(percent + '%');
        });
//upload completo
        request.addEventListener('load', function(e){
        $form.find('.progress-bar').addClass('progress-bar-success').html('Reservas importadas');
//atualizar página
        setTimeout("window.open(self.location, '_self');", 1000);
        });
//arquivo para o upload
        request.open('post', 'processa2.php');
        request.send(formdata);
      }); 
     </script>
     <!--Menu-->
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
    
	</body>
</html>
<!--Idealizado e programado por:Melvin Marques 
Apoio na programação: Marcio Oliveira 
            07/2019
  Agradeçemos pelo apoio e utilização deste sistema, criado totalmente para melhor atendimento ao aluno e professor
-->
</body>
</html>