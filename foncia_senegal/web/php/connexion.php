<?php
session_start();
    include("../../vars.php");
    $user     = $USER_DB;
    $pass     = $PASSWORD_DB;
    $db_name  = $NAME_DB;
    $host     = $HOST_DB;

    $dbh = new PDO('mysql:host='.$host.';dbname='.$db_name, $user, $pass);
    if( array_key_exists('email', $_POST) and array_key_exists('password', $_POST) ){
        $mail = $_POST['email'];
        $mdp  = md5($_POST['password']);
        
        $tab = array();
        $t = array();

        if( $mail == "foncia@gmail.com" && $mdp == md5("DIUCMSI2021") ){
            $_SESSION["connecter"] = true;
            $_SESSION["admin"] = true;
            http_response_code(200);
            $t['infos'] = ["code" => 200];
        }
        else{
            try {
                $q = "SELECT mail,password FROM client where  mail='".$mail."' and password='".$mdp."'";
                
                $stmt = $dbh->prepare($q);
                $stmt->execute();

                $ligne = $stmt->fetch(PDO::FETCH_ASSOC);

                if( $ligne != false ){
                    $_SESSION["connecter"] = true;
                    $_SESSION["id"]        = $mail;

                    $tab["code"] = 200;
                }

                $stmt->closeCursor();

                $t['infos'] = $tab;
                
            } 
            catch (PDOException $e) {
                print "Erreur !: " . $e->getMessage() . "<br/>";
                die();
            }
        }
        
        echo json_encode($t);
    }
    $dbh = null;
?>