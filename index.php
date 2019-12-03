<html>
       <head> 
 <title> Agenda Cogna </title>
 <meta charset="utf-8"/>
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<!--Scripts do bootstrap-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<!--Icones-->
 <link href="/fontawesome/css/all.css" rel="stylesheet">
<!--JQuery-->
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
 <script type="text/javascript"> 	
 	function esconderGeral(id) {
 		$('#'+id).hide();
 	}
 	function mostrarGeral(id) {
 		$('#'+id).show();
 	}
 	function mostraMapaLab(id) {
 		$('#'+id).show();
 
 	}
 	function esconderMapaLab(id) {
 		$('#'+id).hide();
 	}
 </script>

<style>
body {
              
              padding-top: 20px; 
            } 
          </style>
       </head>

     <body>
    <center><img src="logoagendacognav3.png" width="300" style="padding-bottom: 50px;" /> <br /></center>
  <div>  
<font face="Georgia">
<center>
<div class="container" style="padding: 50px;">
    <a href="indexcurso.php"><button type="button" class="btn btn-outline-danger" style="width: 500px; height: 200px; border-radius: 50px 50px 50px; background-image: url('cursos.jpg'); font-family: sans-serif; font-size: 50px;" data-toggle="tooltip" data-placement="right" title="Se você sabe pelo menos o seu curso e disciplina, essa é a sua opção."><h2>Procurar com o Curso</h2></button></a>
   
    
    <a href="indexra.php"><button type="button" data-toggle="tooltip" data-placement="right" title="Se você sabe seu R.A isso é o suficiente, clique aqui." class="btn btn-outline-success" style="width: 500px; height: 200px; border-radius: 50px 50px 50px; background-image: url('aluno.jpg'); font-family: sans-serif; "><h2>Procurar com o R.A</h2></button></a>

    </div>
<br></center>
   <!--ModalMapa-->
   <div class="modal fade bd-example-modal-lg" id="mapaModal" tabindex="-1" role="dialog" aria-labelledby="mapaModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="mapaModalLabel">Mapa Geral da Faculdade Anhanguera-Ouro Verde</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div  class="modal-body">
      	<ul class="nav nav-tabs justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" onclick="mostrarGeral('geralMap'); esconderMapaLab('labsMap')" id="geral" href="#">Geral</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" onclick="mostraMapaLab('labsMap'); esconderGeral('geralMap')" id="labs" href="#">Laboratórios</a>
  </li>
         </ul>
      	
        <img src="mapageral.png" id="geralMap" style="padding: 40px; margin-left: 100px height: 500px; width: 800px;">
        <img src="mapalabs.png" id="labsMap" style="display: none; padding: 40px; height: 600px; width: 800px;">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
<div class="mapa">
	<!--Botão para modalMapa-->
    <a title="Clique para ver o mapa da faculdade!"  data-toggle="modal" data-target="#mapaModal">
    	    <img src="mapa-icone.png"style="height: 100px; width: 100px; padding: 5px;" alt="Ver mapa">
        </a>
</div>
<div style="padding-bottom: 10px;" >
<center><h5>Desenvolvido pelo Apoio TI-FAC4</h5><a href="indexlogin.php"><button type="button" class="btn btn-outline-secondary"><i class="fas fa-tools"></i>Acessar Painel de controle</button></a></center>
   </div>
</body>

<!--Folha de estilo-->
<style type="text/css">
    
            }
.text {
                position: center;
            }

h2 {
    
    text-shadow: 3px 2px black;
}

.mapa {
  position: fixed; 
  top:250px; 
  width: 100%; 
}


</style> 
<script src="bootstrap/js/bootstrap.min.js"></script>
</0html>

