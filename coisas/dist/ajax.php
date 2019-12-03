<?php

include 'mostra_erros.php';

?>
<?php 

require_once('config.php');

if(isset($_GET['customer_id']) && is_numeric($_GET['customer_id']))
{
	$userID = intval($_GET['customer_id']);
	
	$qry = "select * from reservas where id_curso = ".$userID;

	$rs = $dbConn->query($qry);
    $resultado_id = mysqli_query($rs);
	$fetchAllData = $rs->fetch_ALL(MYSQLI_ASSOC);

	$createTable = '<table class="table table-hover col-md-4">';

	$createTable .= '<tr>';
	$createTable .= '<th>Professor</th>';
	$createTable .= '<th>Sala</th>';
	$createTable .= '<th>Disciplina</th>';
	$createTable .= '<th>Curso</th>';
	$createTable .= '<th>Dia</th>';
	$createTable .= '<th>Obs</th>';
	$createTable .= '</tr>';


	foreach($fetchAllData as $customerData)
	
		$createTable .= '<tr>';
		$createTable .= '<td>'.$customerData['Professor'].'</td>';
		$createTable .= '<td>'.$customerData['Sala'].'</td>';
		$createTable .= '<td>'.$customerData['Disciplina'].'</td>';
		$createTable .= '<td>'.$customerData['Curso'].'</td>';
		$createTable .= '<td>'.$customerData['Dia'].'</td>';
		$createTable .= '<td>'.$customerData['Obs'].'</td>';
		$createTable .= '</tr>';	
	

	$createTable .= '</table>';

	echo $createTable;

	$rs->close();

	$dbConn->close();

		
}



?>