                    <?php

                          //Alterar o Status da ancção para Analisar
                          if($ancStatus == '1'){

                            //Pega o Horário Atual
                            date_default_timezone_set('America/Sao_Paulo');                            

                            //Calcula a Data Final com a Data Atual
                              $data_atual = date("Y-m-d");
                              $data_atual = strtotime($data_atual);
                              $dataFim    = strtotime($ancDtFim);
                              $diferenca  = $data_atual - $dataFim;
                              $dias       = floor($diferenca / 86400);
                              $faltaDias  = "{$dias}";

                                                    
                            //Calcula a Hora Final com a Hora Atual
                              $hora_atual = date("H:i:s");
                              $hora_atual = strtotime($hora_atual);                              
                              $horaFim    = strtotime($ancHrsFim);
                              $diferenca  = $hora_atual - $horaFim;
                              $hora       = floor($diferenca / 3600);
                              $minutos    = floor(($diferenca / 60) % 60);
                              $segundos   = floor($diferenca % 60);
                              $faltaHora  = "{$hora}:{$minutos}:{$segundos}";  

                              if ($faltaDias == '0' && $faltaHora >= '0') {
                                  $ancStatus = '2'; 
                                  $sql_anc = 'UPDATE anuncio SET ancStatus = :anctatus WHERE ancId = :ancId';
                                   
                                  try{
                                    $query_anc = $conecta->prepare($sql_anc);                       
                                    $query_anc->bindValue(':ancStatus',$ancStatus,PDO::PARAM_STR);
                                    $query_anc->bindValue(':ancId',$ancId,PDO::PARAM_STR);                   
                                    $query_anc->execute();

                                    } catch(PDOexception $error_novaanc) {
                                      echo 'Erro'.$error_novaanc->getMessage();
                                    }     

                              }                                

                          }
                    ?>