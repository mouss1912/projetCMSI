<?php
session_start();
include("../../vars.php");

if( array_key_exists('idLog', $_POST) && isset($_SESSION["connecter"]) && $_SESSION["connecter"] ){

	global $USER_DB, $PASSWORD_DB, $NAME_DB, $HOST_DB;

	$user       = $USER_DB;
	$pass       = $PASSWORD_DB;
	$db_name    = $NAME_DB;
	$host       = $HOST_DB;

	$dbh = new PDO('mysql:host='.$host.';dbname='.$db_name, $user, $pass);

	$idLog  = $_POST['idLog'];

	try {
		$q = "SELECT * FROM logement WHERE idLog=$idLog ;";

		$stmt = $dbh->prepare($q);
		$stmt->execute();

		$chain = "";
		while( $ligne = $stmt->fetch(PDO::FETCH_ASSOC) ){

			$chain .= '<div class="example-1 col-lg-4" data-id="'. $ligne["idLog"].'">';


			$chain .= ' <div class="minImage">
			<img src="' . $ligne["photo"] . '" style="height:190px;
			width:275px;"/>
			</div>';

			$chain .= '<div class="card-body">';

			$chain .= '<p class="card-title" style= "
			margin-bottom: 0.75rem; font-weight: bold; text-align: center">'. $ligne["typeTransaction"] .' : ' . $ligne["typeLogement"] . '</p>';

			$chain .= '<p > <em>' .'Nombre de piéces : '. $ligne["nbrePiece"] .' '.'piéces'. '</em></p>';

			$chain .= '<p>'.'Localité'.' '.':'.' '.$ligne["localite"] . '</p>';

			$chain .= '<p>'.'Prix'.' '.':'.' ' . $ligne["prix"].' '.'fcfa'. '</p>';    

			$chain .= '<p>'.'Description'.' '.':'.' '  . $ligne["description"] . '</p>';

			$chain .= '</div></div>';
			
		}

		echo json_encode(["data_view" => "$chain"]);
		
		$stmt->closeCursor();
	} 
	catch (PDOException $e) {
		echo json_encode(["error" => $e->getMessage(), "valider" => false]);
		die();
	}

	$dbh = null;

}
else{
	http_response_code(401);
	echo json_encode(["error" => 401]);
}


?>
