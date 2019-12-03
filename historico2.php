<?php
    session_start();

    if(!$_SESSION['usuario']){
        header('Location: indexlogin.php?erro=1');
    }
?>
<?php  
   include('phpconect.php');
 $query ="SELECT *  FROM `reservas` ORDER BY `id` DESC";  
 $result = mysqli_query($con, $query)or die(mysqli_error($con)); 
 ?>  
<!DOCTYPE html>
<html>
    
    <head>
        <title>Controle - Apoio FAC4</title>
        <!--Scripts do bootstrap-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
        <script type="text/javascript">
        //Script para menu interativo simples
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
    //Script da tabela
  $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> 

    </head>
    
    <body onload="ocultaInicio('imp');">
        <!-- Static navbar -->
        <nav class="navbar navbar-light bg-light navbar-static-top navbar-expand-md">
            
                <button type="button" class="navbar-toggler collapsed" data-toggle="collapse"
                data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span>
              </button> <a href="indexpainel.php"><img src="logonovoagenda.png" width="120" ></a>
                <div
                id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav ml-auto">
                        <li onmouseover="exibeMenuImportar('imp');" onmouseout="ocultaMenuImportar('imp');"
                        class="nav-item"><a href="registrodesalas.php" class="nav-link">Reservar</a>
                        </li>
                        <li id="imp" onmouseover="exibeMenuImportar('imp');" onmouseout="ocultaMenuImportar('imp');"
                        class="nav-item"><a href="importar.php" class="nav-link">Importar reservas</a>
                        </li>
                        <li class="nav-item"><a href="historico.php" class="nav-link">Salas e Labs</a>
                        </li>
                        <li class="nav-item"><a href="sair.php" class="nav-link">Sair</a>
                        </li>
                    </ul>
           
            <!--/.nav-collapse -->
            </div>
        </nav>
        <!--Aqui começa a div com o conteudo-->
        <center>
            <img src="logonovoagendapainel.png" width="350">
            <br>
        </center>
<font face="Georgia"> 

           <br><br>  

           <div id="container" class="container"> 



          <a href="editardados.php"><button class="btn btn-danger" type="button" data-toggle="modal" data-target="#editarModal">Editar</button></a>

                <h3 align="center">Controle das salas e laborátorios</h3> <br>

                <center><em>Veja o histórico completo das reservas feitas. Acompanhe quais salas estão ocupadas ou não.</em></center>

                <br>  

                <ul class="nav nav-tabs">

                   <li class="nav-item">

                  <a class="nav-link active" href="historico.php">Geral</a>

                       </li>

                    <li class="nav-item">

                    <a class="nav-link" href="salash.php">Salas e Laboratórios</a>

                       </li>

                 </ul>

                 <br>
             <div id="StudentTableContainer">


             </div>
               
           <div>

<center><h4>Desenvolvido pelo Apoio TI-FAC4</h4></center>

   </div>  

      </font>

    </body>
    <!--Script tabela-->
 <script type="text/javascript">
 
    $(document).ready(function () {
 
        $('#StudentTableContainer').jtable({
            title: 'The Student List',
            paging: true, //Enable paging
            pageSize: 10, //Set page size (default: 10)
            sorting: true, //Enable sorting
            defaultSorting: 'Name ASC', //Set default sorting
            actions: {
                listAction: '/Demo/StudentList',
                deleteAction: '/Demo/DeleteStudent',
                updateAction: '/Demo/UpdateStudent',
                createAction: '/Demo/CreateStudent'
            },
            fields: {
                  Id: {
                    key: true,
                    create: false,
                    edit: false,
                    list: false
                },
                Curso: {
                    title: 'Curso',
                    width: '23%'
                },
                Disciplina: {
                    title: 'Disciplina',
                    list: false
                },
                Sala: {
                    title: 'Sala',
                    list: false
                },
                Turma: {
                    title: 'Turma',
                    width: '13%',
                    options: { '1°', '2°', '3°','4°','5°','6°','7°','8°','9°','10°' }
                },
                Dia: {
                    title: 'Dia',
                    width: '12%',
                    options: {'Segunda-Feira','Terça-Feira', 'Quarta-feira', 'Quinta-feira','Sexta-feira'}
                
                }
            }
        });
 
        //Load student list from server
        $('#StudentTableContainer').jtable('load');
    });
 
</script>
    <!--Folha de estilo-->
    <style type="text/css">
        #container {
            background-color: white;
            border-radius: 10px 20px 30px;
            position:;
            border: 1px solid black;
            padding:10px;
        }
        body {
            background: -webkit-gradient(linear, right top, left top, from(#FF8000), to(#FFFFFF));
        }
        a:visited, a:hover {
            color:white;
        }
        a:link, a:visited {
            color: black;
        }
        nav-item {
            background-color: black;
        }
    </style>

</html>
<!--Idealizado e programado por:Melvin Marques Apoio na programação: Marcio
Oliveira 07/2019 Agradeçemos pelo apoio e utilização deste sistema, criado
totalmente para melhor atendimento ao aluno e professor -->