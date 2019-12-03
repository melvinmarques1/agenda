<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$curso = filter_input(INPUT_POST, 'curso', FILTER_SANITIZE_STRING);
$sala = filter_input(INPUT_POST, 'sala', FILTER_SANITIZE_STRING);

echo "Nome: $curso <br>";
echo "E-mail: $sala <br>";

$result_usuario = "UPDATE reservas SET Curso='$curso', Sala='$sala', Atualizado=NOW() WHERE id='$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Reserva editada com sucesso</p>";
	header("Location: edit_usuario.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Reserva não foi editada com sucesso</p>";
	header("Location: edit_usuario.php?id=$id");
}
