<?php
//$dados = $_FILES('arquivo');

if (!empty($_FILES['arquivo']['tmp_name'])) {
	$arquivo= new DOMDocument();
	$arquivo -> load(!empty($_FILES['arquivo']['tmp_name']));
?>