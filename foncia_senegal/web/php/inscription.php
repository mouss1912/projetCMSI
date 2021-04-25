<?php
session_start();
include("../../vars.php");

$user     = $USER_DB;
$pass     = $PASSWORD_DB;
$db_name  = $NAME_DB;
$host     = $HOST_DB;

$dbh = new PDO('mysql:host='.$host.';dbname='.$db_name, $user, $pass);


if(array_key_exists('nom', $_POST) and array_key_exists('prenom', $_POST) and array_key_exists('email', $_POST) and array_key_exists('password', $_POST) and array_key_exists('tel', $_POST) and array_key_exists('adresse', $_POST) and array_key_exists('civilite', $_POST)){

    $nom  = $_POST['nom'];
    $prenom  = $_POST['prenom'];
    $mail = $_POST['email'];
    $mdp  = md5($_POST['password']);
    $tel  = $_POST['tel'];
    $adresse  = $_POST['adresse'];
    $civilite  = $_POST['civilite'];
    //echo "Je suis dans inscription .php";
    try {
        $q = "INSERT INTO client (`nom`,`prenom`,`mail`,`password`,`tel`, `adresse`, `civilite`) values('$nom','$prenom','$mail','$mdp','$tel', '$adresse', '$civilite');";

        //echo "Je suis dans le try de inscription.php";


        $stmt = $dbh->prepare($q);
        $stmt->execute();

        $ligne = $stmt->fetch(PDO::FETCH_ASSOC);

        $stmt->closeCursor();
        echo json_encode(["No error" => "Bien joue", "valider" => true]);

    } 
    catch (PDOException $e) {
            //print "Erreur !: " . $e->getMessage() . "<br/>";
        echo json_encode(["error" => $e->getMessage(), "valider" => false]);
                //echo "Je suis dans le catch";

        die();
    }
}
else{
    echo json_encode(["Infos" => "Pas d'information fourni"]);
}
$dbh = null;
?>