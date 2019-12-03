<?php
include_once("db_connect.php");
$input = filter_input_array(INPUT_POST);
if ($input['action'] == 'edit') {
$update_field='';
if(isset($input['id'])) {
$update_field.= "id='".$input['id']."'";
} else if(isset($input['Professor'])) {
$update_field.= "Professor='".$input['Professor']."'";
} else if(isset($input['Sala'])) {
$update_field.= "Sala='".$input['Sala']."'";
} else if(isset($input['Disciplina'])) {
$update_field.= "Disciplina='".$input['Disciplina']."'";
} else if(isset($input['Curso'])) {
$update_field.= "Curso='".$input['Curso']."'";
} else if(isset($input['Dia'])) {
$update_field.= "Dia='".$input['Dia']."'";
}
else if(isset($input['Obs'])) {
$update_field.= "Obs='".$input['Obs']."'";
}
if($update_field && $input['id']) {
$sql_query = "UPDATE reservas SET $update_field WHERE id='" . $input['id'] . "'";
mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
}
}
?>