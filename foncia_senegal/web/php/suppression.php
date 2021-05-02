<?php
session_start();
include("../../vars.php");

if( array_key_exists('idLog', $_POST) && isset($_SESSION["connecter"]) && $_SESSION["connecter"] ){
	del_logement($_POST["idLog"]);
	echo json_encode(["delid" => $_POST["idLog"]]);

}
else{
	http_response_code(401);
	echo json_encode(["error" => 401]);
}


function del_logement($idLog){
	global $USER_DB, $PASSWORD_DB, $NAME_DB, $HOST_DB;

	$user       = $USER_DB;
	$pass       = $PASSWORD_DB;
	$db_name    = $NAME_DB;
	$host       = $HOST_DB;

	$dbh = new PDO('mysql:host='.$host.';dbname='.$db_name, $user, $pass);

	$idLog  = $_POST['idLog'];

	try {
		$q = "DELETE FROM logement WHERE idLog=$idLog ;";

		$stmt = $dbh->prepare($q);
		$stmt->execute();

	} 
	catch (PDOException $e) {
		echo json_encode(["error" => $e->getMessage(), "valider" => false]);
		die();
	}

	$dbh = null;


}

?>
