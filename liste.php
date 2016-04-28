<?php 
	header('Content-Type: application/json');
	$mot = $_GET["query"];
	$db = new PDO("mysql:host=localhost;dbname=villagegreen;charset=utf8", "root", "");
	$requete = $db->query("SELECT Id_Produit, Description_Produit, Libelle_Produit, Photo_Produit, Prix_HT_Produit, Stock_Produit, Nom_Sous_Categories, Nom_Categories FROM produits JOIN sous_categories ON Id_Sous_Categories = Ref_Id_Sous_Categories_Prod JOIN Categories ON Id_Categories = Ref_Categories WHERE Libelle_Produit LIKE '%$mot%'");
	
	$tableau = $requete->fetchAll(PDO::FETCH_OBJ);
	echo json_encode($tableau);
?>