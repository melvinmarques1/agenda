<!--Código para salvar a edição na tabela no banco de dados-->
<?php
require_once("dbcontroller2.php");
$db_handle = new DBController();
$result = $db_handle->executeUpdate("UPDATE reservas set " . $_POST["column"] . " = '".$_POST["editval"]."' WHERE id=".$_POST["id"]);;
?>