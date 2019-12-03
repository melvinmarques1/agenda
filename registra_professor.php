<!Doctype HTML>
<?php
    session_start();

    if(!$_SESSION['usuario']){
        header('Location: indexlogin.php?erro=1');
    }
?>
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
    require_once('db.class.php');
    
    $Sala1 = $_POST['Sala'];
    $Curso1 = $_POST['Curso'];
    $Dia1 = $_POST['Dia'];
    $Turma1 = $_POST['Turma'];
    $Periodo1 = $_POST['Periodo'];
    $Disciplina1 = $_POST['Disciplina'];
    $Professor1 = $_POST['Professor'];
    
    $status1 = $_POST['status_sala'];
    $objDb = new dB();
    $link = $objDb -> conecta_mysql();

    $sql="INSERT INTO reservas ( Sala, Curso, Dia, Turma, Periodo, Disciplina, Professor) values ( '$Sala1', '$Curso1', '$Dia1', '$Turma1', '$Periodo1','$Disciplina1','$Professor1')"; 
         
     $objDb2 = new dB();
     $link2 = $objDb2 -> conecta_mysql();
    $update="UPDATE `cadastrosalas` SET `status_sala` = '$status1' WHERE `Sala` = '$Sala1' ";
      mysqli_query($link2, $update);
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
</br>
    	<div class="container">
<!--Exibir se foi registrado no banco de dados ou não-->
        <?php
        if ( mysqli_query($link, $sql))
  { echo "<div class='container alert alert-success'><strong>Reserva feita com sucesso!</strong></div>";
  
  } else {
  echo "<div class='container alert alert-danger'><strong>Falha ao reservar a sala, tente novamente, ou contate ao Adm</strong></div> " . mysqli_connect_error();
}

?>
</br>
       <a href="registrodesalas.php"><button type="button" class="btn btn-warning">Voltar</button></a>

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