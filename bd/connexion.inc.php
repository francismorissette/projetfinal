
<?php
/*define ("SERVEUR","localhost");
define ("USAGER","root");
define ("PASSWORD","");
define ("BD","bd_bibliotheque");
if (!$connexion=@mysql_connect(SERVEUR,USAGER,PASSWORD)){
	echo "Désolé mais la connexion n'a pas pu être établie";
	exit;
}
@mysql_select_db(BD,$connexion);*/




	/*define("USAGER","root");
	define("PASSE","");
	try {
	  $dns = 'mysql:host=localhost;dbname=bd_bibliotheque';
	  $options = array(
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
	  );
	  $connexion = new PDO( $dns, USAGER, PASSE, $options );
	} catch ( Exception $e ) {
	    //echo $e->getMessage();
		echo "Probleme de connexion au serveur de bd";
		exit();
	}*/



try {
	$strConnection= 'mysql:host=localhost;dbname=bd_bibliotheque';
	$pdo = new PDO ($strConnection, 'root', '');
}
catch (PDOException $e) {
	$msg = 'ERREUR PDO dans ' .$e->getMessage();
	die ($msg);
}

?>
