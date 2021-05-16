<?php
session_start();
include("../../vars.php");
$user     = $USER_DB;
$pass     = $PASSWORD_DB;
$db_name  = $NAME_DB;
$host     = $HOST_DB;

$dbh = new PDO('mysql:host='.$host.';dbname='.$db_name, $user, $pass);
if( array_key_exists('c_new_mdp', $_REQUEST) ){
    $mdp  = md5($_REQUEST['c_new_mdp']);
    $mail = $_SESSION['id'];

    try {
        $q = "UPDATE `client` SET password='$mdp' WHERE mail='$mail';";

        $stmt = $dbh->prepare($q);
        $stmt->execute();

        $ligne = $stmt->fetch(PDO::FETCH_ASSOC);

        $stmt->closeCursor();
        echo json_encode(["No error" => "Bien joue", "valider" => true]);

    } 
    catch (PDOException $e) {
        echo json_encode(["error" => $e->getMessage(), "valider" => false]);
        die();
    }
}
else{
    echo json_encode(["Infos" => "Pas d'information fourni"]);
}
$dbh = null;
?>