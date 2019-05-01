<?php
require_once("../bd/connexion.inc.php");
$rep=array();

// function lister(){
// 	global $connexion, $rep;
// 	$requette="SELECT * FROM films";
// 	try{
// 		 $stmt = $connexion->prepare($requette);
// 		 $stmt->execute();
// 		 while($ligne=$stmt->fetch(PDO::FETCH_OBJ)){
// 			 $rep[]=$ligne;
// 		 }
// 	 }catch (Exception $e){
// 	   $rep['erreur']="Probleme pour lister";
// 	 }finally {
// 		unset($connexion);
// 		unset($stmt);
// 		echo json_encode($rep);
// 	 }
// }

function categorie(){
	global $connexion, $rep;
	$selectEcole = $_POST['variableEcole'];
	$selectDept = $_POST['variableDept'];
	$accents = $connexion->query("SET NAMES 'utf8'"); //FIX LES ACCENTS DANS LE ARRAY
	$requete="SELECT * FROM livres WHERE ecole = '$selectEcole' AND dept = '$selectDept'";

	try{
		 $stmt = $connexion->prepare($requete);
		 $stmt->execute();
		 while($ligne=$stmt->fetch(PDO::FETCH_OBJ)){
			 $rep[]=$ligne;
		 }
	 }catch (Exception $e){
	   $rep['erreur']="Probleme pour lister par catégorie";
	 }finally {
		unset($connexion);
		unset($stmt);
		echo json_encode($rep);

		// echo json_encode($selectCategorie);
	 }
}


function avance(){
	global $connexion, $rep;
	$selectTitre = $_POST['variableTitre'];
	$selectAuteur = $_POST['variableAuteur'];
	$selectLangue = $_POST['variableLangue'];
	$selectDepartement = $_POST['variableDepartement'];
	$accents = $connexion->query("SET NAMES 'utf8'"); //FIX LES ACCENTS DANS LE ARRAY
	$requete="SELECT * FROM livres WHERE titre LIKE '%$selectTitre%' AND auteur LIKE '%$selectAuteur%' AND langue LIKE '%$selectLangue%' AND dept = '$selectDepartement'";

	try{
		$stmt = $connexion->prepare($requete);
		$stmt->execute();
		while($ligne=$stmt->fetch(PDO::FETCH_OBJ)){
			$rep[]=$ligne;
		}
	}catch (Exception $e){
		$rep['erreur']="Probleme pour recherche avancer (lister)";
	}finally {
		unset($connexion);
		unset($stmt);
		echo json_encode($rep);
	}
}


//controleur films
$action=$_POST['action'];
switch($action){
	case 'categorie':
		categorie();
	break;
	case 'avance':
		avance();
	break;
}

?>
