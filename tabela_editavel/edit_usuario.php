<?php
session_start();
include_once ("conexao.php");
$result_reserva = "SELECT * FROM reservas WHERE id = '$id'";
$resultado_reserva = mysqli_query($conn, $result_reserva);
$row_usuario = mysqli_fetch_assoc($resultado_reserva);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Editar reserva</title>
	</head>
	<body>
		<a href="index.php">Cadastrar</a><br>
		<a href="listar.php">Listar</a><br>
		<h1>Editar reserva</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="proc_edit_usuario.php">
            <input type="hidden" name="id"  value="<?php echo $row_usuario['id'];?>"><br><br>
			<label>Curso </label>
			<input type="text" name="curso" value="<?php echo $row_usuario['Curso'];?>"><br><br>
			
			<label>Sala: </label>
			<input type="text" name="sala"  value="<?php echo $row_usuario['Sala'];?>"><br><br>
			
			<input type="submit" value="Alterar">
		</form>
	</body>
</html>