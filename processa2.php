       <?php 
include_once("config.php");

//Pegando dados do arquivo enviado
if (!empty($_FILES['arquivo']['tmp_name'])) {
  $arquivo = new DOMDocument();
  $arquivo -> load($_FILES['arquivo']['tmp_name']);
  //var_dump($arquivo);

  $linhas = $arquivo->getElementsByTagName("Row");
  $primeiraLinha=true; 
//Dados do planilha do execel
  foreach ($linhas as $linha) {
    if ($primeiraLinha == false) {

    $curso =$linha->getElementsByTagName("Data")->item(0)->nodeValue;
    //echo "Curso: $curso <br>";

    $disciplina =$linha->getElementsByTagName("Data")->item(1)->nodeValue;
    //echo "Disciplina: $disciplina <br>";

    $sala =$linha->getElementsByTagName("Data")->item(2)->nodeValue;
    //echo "Sala: $sala <br>";

    $dia =$linha->getElementsByTagName("Data")->item(3)->nodeValue;
    //echo "Dia: $dia <br>";

    //echo "<hr>";

    //Inserir reserva no banco de dados
    $result_reserva = "INSERT INTO reservas (Curso, Disciplina, Sala, Dia) VALUES ('$curso','$disciplina','$sala','$dia')";
    $resultado_reserva= mysqli_query($dbConn, $result_reserva);
  }
  $primeiraLinha=false;
  }
}
?>
