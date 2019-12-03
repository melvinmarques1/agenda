<?php  
   include('phpconect.php');
 $query ="SELECT `Curso`,`Sala`,`Professor`,`Turma`,`Disciplina`,`Dia`,`Criada`, `status` FROM `reservas` ORDER BY `id` DESC";  
 $result = mysqli_query($con, $query)or die(mysqli_error($con)); 
 ?>  
<html>
<head>
    <script type="text/javascript" src="jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="funcoes.js"></script>
    <link href="/fontawesome/css/all.css" rel="stylesheet">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans+Condesed:300,700">
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
</head>
<body>

    <button id="btnAdicionar" class="btn btn-danger" type="button">Nova reserva <i class="far fa-calendar-plus"></i></button>
    <table id= "tblCadastro" class="table table-hover table-responsive">         
        <thead >
            <tr>
                <td>Curso</td>
                <td>Sala</td>  
                <td>Disciplina</td>
                <td>Professor</td>
                <td>Turma</td>
                <td>Dia</td> 
                <td>Reserva feita em:</td> 

            </tr></thead>
            <?php while($row = mysqli_fetch_array($result))   
                               {  
                               echo '  
                               <tr>  
                                    <td>'.$row["Curso"].'</td>   
                                    <td>'.$row["Sala"].'</td> 
                                    <td>'.$row["Disciplina"].'</td>   
                                    <td>'.$row["Professor"].'</td> 
                                    <td>'.$row["Turma"].'</td> 
                                    <td>'.$row["Dia"].'</td>
                                    <td>'.$row["Criada"].'</td>  
                                    
                                    
                               </tr>  
                               ';  
                          }
                          ?>     
        
        <tbody>
        </tbody>
    </table>
</body>
</html>


