
<html>
<head>
	<meta charset="UTF-8">

		<title>Registro de salas</title>
		
		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
       <style>
       	<style>
		 	div {
		 		background-color: white;
				border-radius: 10px 20px 20px;
				position: ;
				border: 1px solid black;
				padding: 10px;
		 	}
		 	a:link {
		        color: white;
	               }
	         a:visited {
                color: white; 
            }
            
		 </style>
       </style>
       <!--Query para registrar no banco de dados o que foi colocado no form de reserva-->
	<?php
    include('db.class.php');
    
    $usuario1 = $_POST['usuario'];
    $nomecompleto1 = $_POST['nome_completo'];
    $email1 = $_POST['email'];
    $celular1 = $_POST['celular'];
    $senha1 = md5($_POST['senha']);
    $cargo1 = $_POST['cargo'];
    
    $objDb = new dB();
    $link = $objDb -> conecta_mysql();

    $sql="INSERT INTO usuarios ( usuario, nome_completo, email, celular, senha, cargo) values ( '$usuario1', '$nomecompleto1', '$email1', '$celular1', '$senha1','$cargo1')"; 
  

?>

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
            <a href="index.php"><img src="logominiagenda.png" width="120" style="padding-top: 5px;" /></a>
          </div>
          
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php">Voltar para agenda</a></li>
             
            </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>

      <center><img src="logoagendacognav3.png" width="300" style="padding-bottom: 50px;" /> <br /></center>
    
    <font face="Georgia">
</br>
    	<div class="container">
<!--Exibir se foi registrado no banco de dados ou não-->
 <div>
 <?php 
 if ( mysqli_query($link, $sql))
  {
   echo "<div class='container alert alert-success'><strong>Cadastro feito com sucesso!</strong></div>";
  
    } 
  else 
  {
  echo "<div class='container alert alert-danger'><strong>Algo aconteceu... tente novamente, se persistir, contate o T.I</strong></div> ";
}

?> 
</div>  
</br>
       <a href="indexlogin.php"><button type="button" class="btn btn-warning">Fazer login</button></a>

         </div>
         


<div>
<center><h4>Desenvolvido pelo Apoio TI-FAC4</h4></center>
   </div>



		</body>

</html>
<!--Idealizado e programado por:Melvin Marques 
Apoio na programação: Marcio Oliveira 
            07/2019
  Agradeçemos pelo apoio e utilização deste sistema, criado totalmente para melhor atendimento ao aluno e professor
-->