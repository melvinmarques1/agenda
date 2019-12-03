<?php
include 'DBController.php';
$db_handle = new DBController();
$cursoResult = $db_handle->runQuery("SELECT DISTINCT cursos FROM cadastrocursos ORDER BY cursos ASC");
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
<script type="text/javascript">
    
   
    function naotemreserva() {

    var result = document.getElementById('$result').value;
    
        if (empty($result)){
                        alert ("Não ha salas reservadas no momento.");
                    }
    }
</script>
</head>
<body>
    <div class="container">
        
    <center>
    <h1>Consulte aqui sua sala ou laboratório!</h1><br>
    <em><h5>Obs: M= Matutino N= Noturno</h5></em>
    <em><h5>Selecione seu curso e clique em buscar, para saber sua sala, ou laborátorio</h5></em>
    <!--Menu dropdownlist dos cursos-->
    <form method="POST" name="search" action="indexcurso.php">
        <div id="demo-grid">
            <div >
                <select class="chosen container" style="width: 500px;"  name="cursos[]">
                    <option  value="0" selected="selected">Selecione seu curso</option>
                        <?php
                        if (! empty($cursoResult)) {
                            foreach ($cursoResult as $key => $value) {
                                echo '<option value="' . $cursoResult[$key]['cursos'] . '">' . $cursoResult[$key]['cursos'] . '</option>';
                            }
                        }
                        ?>
                </select>
                
                <button type="submit" class="btn btn-warning" onclick="naotemreserva()"><h4 style="font-size:170%;" >Buscar</h4></button>
            
                
            </div>
            <!--Começa a tabela-->
                <?php

                if (! empty($_POST['cursos'])) {
                    ?></br>
                    <table class="table table-hover .col-xs-12 .col-md-5" cellpadding="10" cellspacing="1">

                <thead>
                    <tr>
                        <th><strong>Curso</strong></th>
                         <th><strong>Disciplina</strong></th>
                       <th><strong>Sala</strong></th>
                        <th><strong>Dia</strong></th>
                    </tr>
                </thead>

                <tbody>
                <?php
                    $query = "SELECT * from reservas";
                    $i = 0;
                    $selectedOptionCount = count($_POST['cursos']);
                    $selectedOption = "";
                    while ($i < $selectedOptionCount) {
                        $selectedOption = $selectedOption . "'" . $_POST['cursos'][$i] . "'";
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
                        <td><div class="col" id="user_data_4"><?php echo $result[$key]['Disciplina']; ?> </div></td>
                        <td><div class="col" id="user_data_2"><?php echo $result[$key]['Sala']; ?> </div></td>
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
 <div >
<center><h5>Desenvolvido pelo Apoio TI-FAC4</h5><a href="indexlogin.php"><button type="button" class="btn btn-secondary"><img src="painel.png" width="15"/>Acessar Painel de controle</button></a></center>
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

h4 {
    color:white;
}
            }
.noResult{
color: #800000;
font-size:14 px;
}
</style> 
<script src="bootstrap/js/bootstrap.min.js"></script>
</html>

