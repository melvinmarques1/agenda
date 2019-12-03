
<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Painel de controle - Apoio FAC4</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />   
             <link href="/fontawesome/css/all.css" rel="stylesheet">
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
          
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php">Voltar para agenda</a></li>
             
            </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>
<!--Aqui começa a div com o conteudo-->
  
     <body>
    <center><img src="logoagendacognav3.png" width="300" style="padding-bottom: 50px;" /> </center>
   
<font face="Georgia"> 
          
           <div class="col-md-4">
  </div>
  <!--Formulário de login-->
<div class="container col-md-4" id="container">
                <p>Você possui uma conta?</h3>
                <br />
              <form method="post" action="validar_acesso.php" id="formLogin">
                <div class="form-group">
                  <input type="text" class="form-control" id="campo_usuario" name="usuario" placeholder="Usuário" required="required"/>
                </div>
                
                <div class="form-group">
                  <input type="password" class="form-control red" id="campo_senha" name="senha" placeholder="Senha" required="required" />
                </div>
                
                <button type="buttom" class="btn btn-primary" id="btn_login">Entrar <i class="fas fa-door-open"></i></button>  
 
                <br /><br />
                <!--Mostrar que a senha ou usuários não existem-->
                 <?php
                 include ('mostra_erros.php');
                 
                if ($erro == "erro=1" ) {
                  echo '<font color="#FF0000">Usuário e ou senha inválido(s)</font>';
                }

              ?>
               
              </form>

            </form>
      <a href="cadastro.php"><button type="buttom" class="btn btn-warning" id="btn_cadastro">Não tenho uma conta <i class="fas fa-edit"></i></button></a><br><br>
 <center><em>Caso tenha algum problema, contacte o T.I de sua unidade</em></center>
          </div>
 <div class="col-md-4">
  </div><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br>
  

<br><center><h4>Desenvolvido pelo Apoio TI-FAC4</h4></center>
   

      </body> 
      <!--Folha de estilo-->
      <style type="text/css">
      .notice{
      	padding: 20px;

      }
  #container {
        background-color: white;
        border-radius: 10px 20px 30px;
        position: center;
        border: 1px solid black;
        padding:10px;
      }
       
          

            a:link, a:visited, a:hover, a:active{
              color:white;
            }
      </style> 
 </html>  
 <!--Idealizado e programado por:Melvin Marques 
Apoio na programação: Marcio Oliveira 
            07/2019
  Agradeçemos pelo apoio e utilização deste sistema, criado totalmente para melhor atendimento ao aluno e professor
-->