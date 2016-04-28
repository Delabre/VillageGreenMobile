<?php 
	header('Content-Type: application/json');
	$db = new PDO("mysql:host=localhost;dbname=villagegreen;charset=utf8", "root", "");
	$requete = $db->query("SELECT * FROM categories");
	
	$tableau = $requete->fetchAll(PDO::FETCH_OBJ);
	echo json_encode($tableau);
?>