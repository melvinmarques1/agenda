
<!DOCTYPE HTML>
<?php  include('phpconect.php');
?>
<html lang="pt-br">
<?php
    session_start();

    if(!$_SESSION['usuario']){
        header('Location: indexlogin.php?erro=1');
    }
?>
	<head>
		<meta charset="UTF-8">

		<title>Registro de salas - Apoio FAC4</title>
		
		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

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
<!--Formulário de reserva-->
	    	
	    	<div class="col-md-12">
	    		<h3>Reserve uma sala ou laboratório</h3>
	    		<br />
				<form method="post" action="registra_professor.php" id="formCadastrarse">					
                     <h3>Informações principais</h3>
					<div class="form-group">
					<h5>Sala:</h5>	
			   <?php include('salas.php'); ?>	
					</div>
					<h5>Curso:</h5> 
					<div class="form-group">
					
	          <?php include('cursos.php'); ?>
 
					</div>	
					<h5>Dia:</h5> 			
					<div class="form-group">
					
	          <?php include('dias.php'); ?>
 
					</div>		
					<h5>Periodo:</h5> 			
					<div class="form-group">
					
	          <?php include('periodos.php'); ?>
 
					</div>	
					<h5>Turma:</h5>								
					<div class="form-group">
					
	          <?php include('turmas.php'); ?>
 
					</div>	
                   <h3>Informações adcionais</h3>
                     <div class="form-group">
						<input type="text" class="form-control" id="Professor" name="Professor" placeholder="Professor" >
					</div>   
					<div class="form-group">
						<input type="text" class="form-control" id="Disciplina" name="Disciplina" placeholder="Disciplina" >
					</div>
					<div class="form-group">
						<input type="hidden" class="form-control" id="status_sala" name="status_sala" value="Reservado" >
					</div>
					
					<button type="submit" class="btn btn-warning">Reservar</button>
				</form>
			</div>
			<div class="col-md-4"></div>

			<div class="clearfix"></div>
			<br />
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>

		</div>
<div>
<center><h4>Desenvolvido pelo Apoio TI-FAC4</h4></center>
   </div>

	    </div>
	<!--Scripts-->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
	</body>
</html>
<!--Idealizado e programado por:Melvin Marques 
Apoio na programação: Marcio Oliveira 
            07/2019
  Agradeçemos pelo apoio e utilização deste sistema, criado totalmente para melhor atendimento ao aluno e professor
-->