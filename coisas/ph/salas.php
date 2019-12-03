<?php  
   include('phpconect.php');
 $query ="SELECT `Professor`,`Sala`,`Disciplina`,`Curso`,`Dia`,`Obs`  FROM `reservas` ORDER BY `id` DESC WHERE `Sala`=`Sala`";  
 $result = mysqli_query($con, $query)or die(mysqli_error($con)); 
 ?>  
 <div class="table-responsive"> 
                <!---Tabela conectada ao banco de dados-->
                     <table id="employee_data" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    
                                    <td>Professor</td>  
                                    <td>Sala</td>  
                                    <td>Curso</td>  
                                    <td>Disciplina</td>  
                                    <td>Dia</td>
                                    <td>Obs</td>   
                               </tr>  
                          </thead>  
                         <?php while($row = mysqli_fetch_array($result))   
                               {  
                               echo '  
                               <tr>  
                                    <td>'.$row["Professor"].'</td>  
                                    <td>'.$row["Sala"].'</td>  
                                    <td>'.$row["Curso"].'</td>  
                                    <td>'.$row["Disciplina"].'</td>  
                                    <td>'.$row["Dia"].'</td> 
                                    <td>'.$row["Obs"].'</td>
                               </tr>  
                               ';  
                          }
                          ?>                              
                         
                     </table>  
                </div>  