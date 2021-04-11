<?php
    // variables d'environement
require_once 'vars.php';

function echo_liste_client($admin=false){
    global $USER_DB, $PASSWORD_DB, $NAME_DB, $HOST_DB;

    $user       = $USER_DB;
    $pass       = $PASSWORD_DB;
    $db_name    = $NAME_DB;
    $host       = $HOST_DB;

        // Ouverture connexion
    $dbh = new PDO('mysql:host='.$host.';dbname='.$db_name, $user, $pass);

    try {
        $query = "SELECT nom, prenom, mail, tel, adresse FROM client;";

        $stmt = $dbh->prepare($query);
        $stmt->execute();

        if($admin === false){

            while( $ligne = $stmt->fetch(PDO::FETCH_ASSOC) ){
                echo "<tr>\n";
                foreach ($ligne as $col_value) {
                    echo "<td>\n";
                    echo $col_value;
                    echo "\n</td>\n";
                }
                echo "\n</tr>\n";
            }
        }
        else{
            $maile = null;
            while( $ligne = $stmt->fetch(PDO::FETCH_ASSOC) ){
                echo "<tr>\n";
                foreach ($ligne as $col_value) {
                    if( !(stristr($string, '@') === FALSE) ){
                        echo "<td>\n";
                        echo $col_value;
                        echo "\n</td>\n";
                        echo "<td>\n";
                        echo '<a class="delete_btn" href="#" data-id='.$col_value.'> Supprimer </a>';
                        echo "\n</td>\n";
                    }
                }

                echo "\n</tr>\n";
            }
        }

        $stmt->closeCursor();

    } 
    catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
        // Fermeture connexion
    $dbh = null;
}


function echo_liste_logement($admin=false){
    global $USER_DB, $PASSWORD_DB, $NAME_DB, $HOST_DB;

    $user       = $USER_DB;
    $pass       = $PASSWORD_DB;
    $db_name    = $NAME_DB;
    $host       = $HOST_DB;

    $dbh = new PDO('mysql:host='.$host.';dbname='.$db_name, $user, $pass);

    try {
        $query = "SELECT typelogement, prix, localite, photo FROM logement;";

        $stmt = $dbh->prepare($query);
        $stmt->execute();
        if($admin === false){

            while( $ligne = $stmt->fetch(PDO::FETCH_ASSOC) ){
                echo "<tr>\n";
                foreach ($ligne as $col_value) {
                    echo "<td>\n";
                    echo $col_value;
                    echo "\n</td>\n";
                }
                echo "\n</tr>\n";

                $chain ="";
                    $chain .= '<div class="col-lg-12">';
                    $chain .= '<div class="card">';            
                    $chain .= '<img class="card-image" src="images/image1.jpg" alt="alternative">';
                    $chain .= '<div class="card-body">';
                    $chain .= '<h4 class="card-title">' . "title" . '</h4>';
        // chain += '<h4 class="card-title">' + "title" + '</h4>'
                    $chain .= '<p>' . "description" . '</p>';
                    $chain .= '</div></div></div>';

                echo $chain;
            }
        }
        else{
            $maile = null;
            while( $ligne = $stmt->fetch(PDO::FETCH_ASSOC) ){
                echo "<tr>\n";
                foreach ($ligne as $col_value) {
                    if( !(stristr($string, '@') === FALSE) ){
                        echo "<p>lqsjdlqjsdlqjsdl</p>";
                        echo "<td>\n";
                        echo $col_value;
                        echo "\n</td>\n";
                        echo "<td>\n";
                        echo '<a class="delete_btn" href="#" data-id='.$col_value.'> Supprimer </a>';
                        echo "\n</td>\n";
                    }
                }
                echo "\n</tr>\n";
                
                    // $chain ="";
                    // $chain .= '<div class="col-lg-12">';
                    // $chain .= '<div class="card">';            
                    // $chain .= '<img class="card-image" src="images/image1.jpg" alt="alternative">';
                    // $chain .= '<div class="card-body">';
                    // $chain .= '<h4 class="card-title">' . "title" . '</h4>';
                    // $chain .= '<p>' . "description" . '</p>';
                    // $chain .= '</div></div></div>';

                echo $chain;
            }
        }

        $stmt->closeCursor();

    } 
    catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
    $dbh = null;
}


?>