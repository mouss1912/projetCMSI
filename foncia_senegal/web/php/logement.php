<?php
session_start();
include("../../vars.php");

$user     = $USER_DB;
$pass     = $PASSWORD_DB;
$db_name  = $NAME_DB;
$host     = $HOST_DB;

$dbh = new PDO('mysql:host='.$host.';dbname='.$db_name, $user, $pass);


if(array_key_exists('localite', $_POST)){

    $typeLogement  = $_POST['typeLogement'];
    $localite  = $_POST['localite'];
    $description = $_POST['description'];
    $prix  = $_POST['prix'];
    $typeTransaction  = $_POST['typeTransaction'];

    $nomProprio  = $_POST['nomProprio'];
    $prenomProprio  = $_POST['prenomProprio'];
    $nbrePiece  = $_POST['nbrePiece'];


    $email  = $_POST['email'];
    $date  = $_POST['date'];

    print_r($_POST);
    $img  = $_POST['photo'];
    
    
    $dos = "images/min/";
    $img = str_replace("\\", "/", $img);
    $img = basename($img);
    echo "$img";

    echo "Je suis dans logement .php";

    try {
        $q = "INSERT INTO logement (`localite`,`description`,`prix`,`typeLogement`,`typeTransaction`,`nomProprio`, `prenomProprio`, `nbrePiece`,`email`, `date`,`photo`) values('$localite','$description','$prix','$typeLogement','$typeTransaction', '$nomProprio', '$prenomProprio','$nbrePiece','$email', '$date','$dos$img');";

        echo "Je suis dans le try de logement.php";


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