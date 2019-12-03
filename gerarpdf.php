<?php	

	include_once("phpconect.php");
	$html = '<table border=1';	
	$html .= '<thead>';
	$html .= '<tr>';
	$html .= '<th>ID</th>';
	$html .= '<th>Curso</th>';
	$html .= '<th>Disciplina</th>';
	$html .= '<th>Sala</th>';
	$html .= '<th>Turma</th>';
	$html .= '<th>Periodo</th>';
	$html .= '<th>Dia</th>';
	$html .= '<th>Professor</th>';
	$html .= '<th>Reservado em:</th>';
	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';
	
	$result_reservas = "SELECT * FROM reservas";
	$resultado_reservas = mysqli_query($con, $result_reservas);
	while($row_reservas = mysqli_fetch_assoc($resultado_reservas)){
		$html .= '<tr><td>'.$row_reservas['id'] . "</td>";
		$html .= '<td>'.$row_reservas['Curso'] . "</td>";
		$html .= '<td>'.$row_reservas['Disciplina'] . "</td>";
		$html .= '<td>'.$row_reservas['Sala'] . "</td>";
		$html .= '<td>'.$row_reservas['Turma'] . "</td>";	
		$html .= '<td>'.$row_reservas['Periodo'] . "</td>";
		$html .= '<td>'.$row_reservas['Dia'] . "</td>";
		$html .= '<td>'.$row_reservas['Professor'] . "</td>";
		$html .= '<td>'.$row_reservas['Criada'] . "</td></tr>";	
	}
	
	$html .= '</tbody>';
	$html .= '</table';

	
	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;


    //data do servidor
    $data = date('Y-m-d');

	// include autoloader
	require_once("dompdf/autoload.inc.php");

	//Criando a Instancia
	$dompdf = new DOMPDF();
	
	// Carrega seu HTML
	$dompdf->load_html('
			<h1 style="text-align: center;">Agenda Cogna - Relatório de reservas Mensal</h1>
			'. $html .'
		');
    // Tamanho do documento
    $dompdf->setPaper('A4','landscape');

	//Renderizar o html
	$dompdf->render();

	//Exibibir a página
	$dompdf->stream(
		"relatorio_agenda".$data , 
		array(
			"Attachment" => true //Para realizar o download somente alterar para true
		)
	);
?>