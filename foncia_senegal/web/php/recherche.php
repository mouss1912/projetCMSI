<?php
session_start();
include("../../vars.php");

global $USER_DB, $PASSWORD_DB, $NAME_DB, $HOST_DB;


$user     = $USER_DB;
$pass     = $PASSWORD_DB;
$db_name  = $NAME_DB;
$host     = $HOST_DB;


$dbh = new PDO('mysql:host='.$host.';dbname='.$db_name, $user, $pass);

//function echo_filtre_logement($admin=false){

	$typeLogement  = $_POST['typeLogement'];
	$localite  = $_POST['localite'];
	//$nbrePiece = $_POST['nbrePiece'];
	//$prix  = $_POST['prix'];
	//$typeTransaction  = $_POST['typeTransaction'];

	try {

		$query = "SELECT idLog, typelogement, typeTransaction, prix, localite, description, photo FROM logement WHERE localite = '$localite' AND typelogement = '$typeLogement';";


		$stmt = $dbh->prepare($query);
		$stmt->execute();
		//if($admin === false){
			while( $ligne = $stmt->fetch(PDO::FETCH_ASSOC) ){
				//echo "$ligne";
				$chain ="";

				$chain .= '<div class="example-1 col-lg-4" data-id="'. $ligne["idLog"].'">';

				$chain .= '<div class="card" style="display:flex;">';            

				$chain .= ' <div class="minImage">
				<img src="' . $ligne["photo"] . '" style="height:190px;
				width:275px;"/>
				</div>';

				$chain .= '<div class="card-body">';


				$chain .= '<h4 class="card-title" style= "
				margin-bottom: 0.75rem; font-weight: bold; text-align: center">'. $ligne["typeTransaction"] .' : ' . $ligne["typelogement"] . '</h4>';


				$chain .= '<h6 style = "text-align : center">' . $ligne["localite"] . '</h6> </br>';

				$chain .= '<h3 style = "text-align : center">' . $ligne["prix"] .'fcfa'. '</h3>';    

				$chain .= '<p>' . $ligne["description"] . '</p>';


				$chain .= '<label for="show-menu" class="menu-button id_input glyphicon glyphicon-remove"></label>';

				$chain.= '<div class="form-group row">';

				$chain.= '<div class="col-md-6">';

				$chain .= ' <a href="#details-lightbox-7" class="popup-with-move-anim" ><button type="button" class="btn btn-outline-success btn-rounded waves-effect" ><i class="fas fa-cogs pr-2"
				aria-hidden="true"></i>VISITER</button> </a>';

				$chain.= '</div>';

				$chain.= '<div class="col-md-6">';


				$chain .= '<button type="button" class="btn btn-outline-danger id_input btn-rounded waves-effect" data-id="'. $ligne["idLog"].'" ><i class="fas fa-remove pr-2"aria-hidden="true"></i>DELETE</button>';

				$chain.= '</div>';
				$chain.= '</div>';

				$chain .= '</div></div></div>';

				// echo $chain;
				echo json_encode(["chainFiltre" => "$chain"]);
			}
		// }
		// else{
		// 	$maile = null;
		// 	while( $ligne = $stmt->fetch(PDO::FETCH_ASSOC) ){
		// 		echo "<tr>\n";
		// 		foreach ($ligne as $col_value) {
		// 			if( !(stristr($string, '@') === FALSE) ){
		// 				echo "<p>lqsjdlqjsdlqjsdl</p>";
		// 				echo "<td>\n";
		// 				echo $col_value;
		// 				echo "\n</td>\n";
		// 				echo "<td>\n";
		// 				echo "\n</td>\n";
		// 			}
		// 		}
		// 		echo "\n</tr>\n";

		// 		echo $chain;
		// 	}
		// }

		$stmt->closeCursor();

	} 
	catch (PDOException $e) {
		print "Erreur !: " . $e->getMessage() . "<br/>";
		die();
	}
	$dbh = null;
//}

//echo_filtre_logement();

?>
