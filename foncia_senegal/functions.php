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
        $query = "SELECT typelogement, typeTransaction, prix, localite, description, photo FROM logement;";

        $stmt = $dbh->prepare($query);
        $stmt->execute();
        if($admin === false){

            while( $ligne = $stmt->fetch(PDO::FETCH_ASSOC) ){

                $chain ="";
                foreach ($ligne as $col_value) {
                   $id ; 
                   $chain .= '<div class="col-lg-4">';
                   $chain .= '<div class="card" style="display:flex;">';            

                   $chain .= ' <div class="min">
                   <a href="' . $ligne["photo"] . '" rel="zoombox[galerie]">
                   <img src="' . $ligne["photo"] . '"/>
                   <h3>' . $ligne["photo"] . '</h3>
                   </a>
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
                 // $chain .= '<a id="btn_connexion" class="btn-solid-lg popup-with-move-anim" href="">VISITER</a>';
                   $chain .= '<button type="button" class="btn btn-primary btn-sm">Visiter</button>';
                   $chain.= '</div>';

                   $chain.= '<div class="col-md-6">';

                // $chain .=' <button class="btn"><i class="fa fa-trash"></i></button>';
                  // $chain .= '<a id="btn_connexion" class="btn-solid-lg popup-with-move-anim" href="">SUPPRIMER</a>';
                   $chain .= '<button type="button" class="btn btn-secondary btn-sm">Supprimer</button>';
                   $chain.= '</div>';
                   $chain.= '</div>';


                     // echo '<a id="btn_connexion" class="btn-solid-lg popup-with-move-anim" href="#details-lightbox-3">LISTE</a>';
                  //  $chain += '</div>';
                   $chain .= '</div></div></div>';
               }
               echo $chain;
                //}
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