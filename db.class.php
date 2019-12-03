<?php
class db {
	//host
	private $host= 'localhost';
   //usuario
	private $usuario= 'Melvin';
   //senha
	private $senha= 'fac@2019';
   //banco de dados
	private $database= 'agenda';

	public function conecta_mysql (){
       //criar a conexão
       $con = mysqli_connect($this-> host, $this-> usuario, $this-> senha, $this-> database);
 
      //ajustar o charset de comunicação entre a aplicação e o banco de dados
       mysqli_set_charset($con, 'utf8');
      //verificar se houve erro de conexão
       if(mysqli_connect_errno()){
       	echo 'Houve um erro ao conectar com o BD',mysqli_connect_error();
       }
      

      return $con;

	}
}
?>