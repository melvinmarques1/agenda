
<?php  include('phpconect.php');
?>
<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Cadastro de usuario - Apoio FAC4</title>
		
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
       
     <body>
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
            <a href="index.php"><img src="logominiagenda.png" width="120" style="padding-top: 5px;" /></a>
          </div>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">Voltar para agenda</a></li>

            </ul>
            </li>
            </ul>
            <!--/.nav-collapse -->
        </div>
      </nav>

      <center><img src="logoagendacognav3.png" width="300" style="padding-bottom: 50px;" /> <br /></center>
 
    <font face="Georgia">

	    <div class="container">
	    	
	    	<br /><br />
<!--Formulário de reserva-->
	    	<div class="col-md-4"></div>
	    	<div class="col-md-4">
	    		<h3><a href="indexlogin.php"><i class="far fa-arrow-alt-circle-left" data-toggle="tooltip" data-placement="right" title="Voltar"></i></a> Cadastro de Usuário</h3>
	    		<br />
				<form method="post" action="registra_usuario.php" id="formCadastrarse">					
                   <div class="form-group">
                   	<input type="text" class="form-control" name="usuario" id="usuario" name="usuario" placeholder="Usuario">                 	
                   </div>
                   <div class="form-group">
                   	<input type="text" class="form-control" id="nome_completo" name="nome_completo" placeholder="Nome Completo">
                   </div>
                   <div class="form-group">
                   	<input type="email" class="form-control" name="email" id="email" placeholder="Email">
                   </div>
                   <div class="form-group">
                   	<input type="text" class="form-control" name="celular" id="celular" placeholder="Número do Celular">
                   </div>
                   <div class="form-group">
                   	<input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">                  	
                   </div>
                   <h5>Eu sou:</h5>
					<div class="form-check">						
                    <input type="checkbox" class="form-check-input" id="cargo" name="cargo" value="Professor"> Professor
                    <br>
                    <input type="checkbox" class="form-check-input" id="cargo" name="cargo" value="Colaborador"> Colaborador
                     </div>
                     <br>
					<button type="submit" class="btn btn-success">Cadastrar</button>
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
   <br><br>

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