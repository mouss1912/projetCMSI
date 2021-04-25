<?php
session_start();
include("../../vars.php");


if( array_key_exists('id', $_POST) && isset($_SESSION["connecter"]) && $_SESSION["connecter"] ){
	del_logement($_POST["id"]);

}
else{
	http_response_code(401);
	echo json_encode(["error" => 401]);
}


function del_logement($id){
	global $USER_DB, $PASSWORD_DB, $NAME_DB, $HOST_DB;

	$user       = $USER_DB;
	$pass       = $PASSWORD_DB;
	$db_name    = $NAME_DB;
	$host       = $HOST_DB;

	$dbh = new PDO('mysql:host='.$host.';dbname='.$db_name, $user, $pass);


	try {
		$query = "DELETE id FROM logement;";

	} 
	catch (PDOException $e) {
		print "Erreur !: " . $e->getMessage() . "<br/>";
		die();
	}
        // Fermeture connexion
	$dbh = null;

}

?>

