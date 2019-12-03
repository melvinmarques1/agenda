<! doctype html>

<html lang="pt-br">
       <head> 
 <title> Agenda Cogna </title>
 <meta charset="utf-8"/>
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">

<style>
  body {
              
              padding-top: 20px; 
            } 
  </style>
  <link href="/fontawesome/css/all.css" rel="stylesheet">
       </head>

     <body>
    <center><img src="logoagendacognav3.png" width="300" style="padding-bottom: 50px;" /> <br /></center>
    
<font face="Georgia">
  <!--Aqui é o corpo onde vai ter os cursos e exibir o resultado das salas-->
   <?php
include 'DBController.php';
$db_handle = new DBController();
$cursoResult = $db_handle->runQuery("SELECT DISTINCT `Curso`,`Turma` FROM reservas ORDER BY id ASC");
//Recarregar a página em 30s
header("Refresh: 20; url=index.php");
?>
<html>
<head>
    <!--Scripts do bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<!--Menu hide/show-->
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
</head>
<body>
    <div class="container">
        
    <center>
    <h1>Consulte sua sala ou laboratório!</h1><br>
    
    <!--Menu dropdownlist dos cursos-->
    <form method="POST" name="search" action="indexcurso.php">
        <div id="demo-grid">
            <div >
                <select class="chosen" style="width: 400px; height: 200px;"  name="Curso[]">
                    <option  value="0" selected="selected">Selecione seu curso</option>
                        <?php
                        if (! empty($cursoResult)) {
                            foreach ($cursoResult as $key => $value) {
                                echo '<option value="' . $cursoResult[$key]['Curso'] . '">' . $cursoResult[$key]['Curso'] . '</option>';
                            }
                        }
                        ?>
                </select>
                <select class="chosen" style="width: 300px; height: 200px;"  name="Turma[]">
                    <option  value="0" selected="selected">Selecione sua Turma</option>
                        <?php
                        if (! empty($turmaResult)) {
                            foreach ($turmaResult as $key => $value) {
                                echo '<option value="' . $turmaResult[$key]['Turma'] . '">' . $turmaResult[$key]['Turma'] . '</option>';
                            }
                        }
                        ?>
                </select>
                
                <button type="submit" class="btn btn-warning" ><a id="buscar"><i class="fas fa-search"></i> Buscar</a></button><br><br>
            
                <i class="fas fa-exclamation-circle"></i><em>Caso seu curso não apareça nas opções, não foi feito reserva alguma nele, fale com seu coordenador.</em>
            </div>
            <!--Começa a tabela-->
                <?php

                if (! empty($_POST['Curso'])) {
                    ?></br>
                    <table class="table table-hover .col-xs-12 .col-md-5" cellpadding="10" cellspacing="1">

                <thead>
                    <tr>
                        <th><strong>Curso</strong></th>
                        <th><strong>Sala</strong></th>
                         <th><strong>Disciplina</strong></th>
                       <th><strong>Turma</strong></th>
                       <th><strong>Periodo</strong></th>
                        <th><strong>Dia</strong></th>
                    </tr>
                </thead>

                <tbody>
                <?php
                    $query = "SELECT * from reservas";
                    $i = 0;
                    $selectedOptionCount = count($_POST['Curso']);
                    $selectedOption = "";
                    while ($i < $selectedOptionCount) {
                        $selectedOption = $selectedOption . "'" . $_POST['Curso'][$i] . "'";
                        if ($i < $selectedOptionCount - 1) {
                            $selectedOption = $selectedOption . ", ";
                        }
                        
                        $i ++;
                    }
                    $query = $query . " WHERE Curso in (" . $selectedOption . ")";
                    
                    $result = $db_handle->runQuery($query);
                } 
                
                if (! empty($result)) {
                    foreach ($result as $key => $value) {  
                       ?> 
                     
                <tr>                        
                        <td><div class="col" id="user_data_3"><?php echo $result[$key]['Curso']; ?> </div></td>
                        <td><div class="col" id="user_data_2"><?php echo $result[$key]['Sala']; ?> </div></td>
                        <td><div class="col" id="user_data_4"><?php echo $result[$key]['Disciplina']; ?> </div></td>
                        <td><div class="col" id="user_data_1"><?php echo $result[$key]['Turma']; ?> </div></td>
                        <td><div class="col" id="user_data_6"><?php echo $result[$key]['Periodo']; ?> </div></td>
                        <td><div class="col" id="user_data_5"><?php echo $result[$key]['Dia'] ?> </div></td>
                        
                    </tr>            
                <?php
                    } 
                    ?>
                    
                </tbody>
            </table>
            <?php
                }
                ?>  
        </div>
    </form>
</center>
</div>
<div>
    </div>
<br>
<div>
    </div>
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
        
        <img  src="mapageral.png" id="geralMap" style="padding: 40px; margin-left: 100px height: 500px; width: 800px;">
        <img  src="mapalabs.png" id="labsMap" style="display: none; padding: 40px; height: 600px; width: 800px;">
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
<div ><br>
<center>Desenvolvido pelo Apoio TI-FAC4<br><a href="index.php"><img src="voltar.png" width="30" style="padding-bottom: 5px;" /></a></center>
   </div>
</body>

<!--Folha de estilo-->
<style type="text/css">
    .container {
                background-color: white;
                border-radius: 10px 20px 30px;
                position: ;
                border: 1px solid black;
                padding:10px;


            }
.text {
                position: center;
            }
.mapa {
  position: fixed; 
  bottom:500px; 
  width: 100%; 
}

#buscar {
    color:white;
}
            }



</style> 
<script src="bootstrap/js/bootstrap.min.js"></script>
</html>



</font>

    
     </body>

</html> 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <!--Script para select com busca-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.min.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.jquery.min.js"></script>

  <script type="text/javascript">
    
      $(".chosen").chosen();
</script>
<!--Idealizado e programado por:Melvin Marques 
Apoio na programação: Marcio Oliveira 
            07/2019
  Agradeçemos pelo apoio e utilização deste sistema, criado totalmente para melhor atendimento ao aluno e professor
-->
