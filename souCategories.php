<?php 
	header('Content-Type: application/json');
	$id = $_GET['query'];
	$db = new PDO("mysql:host=localhost;dbname=villagegreen;charset=utf8", "root", "");
	$requete = $db->query("SELECT * FROM sous_categories WHERE Ref_categories = $id");
	
	$tableau = $requete->fetchAll(PDO::FETCH_OBJ);
	echo json_encode($tableau);
?>