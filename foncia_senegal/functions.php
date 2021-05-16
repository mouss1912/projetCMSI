<?php
    // variables d'environement
require_once 'vars.php';

/* ########### Récupération liste client #################### */
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


/* ########### Récupération liste logement #################### */
function echo_liste_logement($admin=false){
  global $USER_DB, $PASSWORD_DB, $NAME_DB, $HOST_DB;

  $user       = $USER_DB;
  $pass       = $PASSWORD_DB;
  $db_name    = $NAME_DB;
  $host       = $HOST_DB;

  $dbh = new PDO('mysql:host='.$host.';dbname='.$db_name, $user, $pass);

  try {
    $query = "SELECT idLog, typelogement, typeTransaction, prix, nbrePiece ,localite, description, photo FROM logement;";

    $stmt = $dbh->prepare($query);
    $stmt->execute();
    if($admin === false){

      while( $ligne = $stmt->fetch(PDO::FETCH_ASSOC) ){

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

        $chain .= '<h6> <em>' . $ligne["nbrePiece"] .' '.'piéces'. '</em></h6>';

        $chain .= '<h5 style = "text-align : center">' . $ligne["localite"] . '</h5> </br>';

        $chain .= '<h3 style = "text-align : center">' . $ligne["prix"].' '.'fcfa'. '</h3>';    

        $chain .= '<p>' . $ligne["description"] . '</p>';


        $chain .= '<label for="show-menu" class="menu-button id_input glyphicon glyphicon-remove"></label>';

        $chain.= '<div class="form-group row">';

        $chain.= '<div class="col-md-6">';

        $chain .= ' <a href="#details-lightbox-7" class="popup-with-move-anim id_input_visite " data-id="'. $ligne["idLog"].'" ><button type="button" class="btn btn-outline-success btn-rounded waves-effect"  ><i class="fas fa-cogs pr-2"
        aria-hidden="true"></i>VISITER</button> </a>';

        $chain.= '</div>';

        $chain.= '<div class="col-md-6">';


        $chain .= '<button type="button" class="btn btn-outline-danger id_input btn-rounded waves-effect" data-id="'. $ligne["idLog"].'" ><i class="fas fa-remove pr-2"aria-hidden="true"></i>DELETE</button>';

        $chain.= '</div>';
        $chain.= '</div>';

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

/* ########### Récupération liste location #################### */
function echo_liste_logement_location($admin=false){
  global $USER_DB, $PASSWORD_DB, $NAME_DB, $HOST_DB;

  $user       = $USER_DB;
  $pass       = $PASSWORD_DB;
  $db_name    = $NAME_DB;
  $host       = $HOST_DB;

  $dbh = new PDO('mysql:host='.$host.';dbname='.$db_name, $user, $pass);

  try {
    $query = "SELECT idLog, typelogement, typeTransaction, prix, localite,nbrePiece, description, photo FROM logement WHERE typeTransaction = 'location' ;";

    $stmt = $dbh->prepare($query);
    $stmt->execute();
    if($admin === false){

      while( $ligne = $stmt->fetch(PDO::FETCH_ASSOC) ){

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

        $chain .= '<h6> <em>' . $ligne["nbrePiece"] .' '.'piéces'. '</em></h6>';

        $chain .= '<h5 style = "text-align : center">' . $ligne["localite"] . '</h5> </br>';

        $chain .= '<h3 style = "text-align : center">' . $ligne["prix"].' '.'fcfa'. '</h3>';    

        $chain .= '<p>' . $ligne["description"] . '</p>';


        $chain .= '<label for="show-menu" class="menu-button id_input glyphicon glyphicon-remove"></label>';

        $chain.= '<div class="form-group row">';

        $chain.= '<div class="col-md-6">';

        $chain .= ' <a href="#details-lightbox-7" class="popup-with-move-anim id_input_visite " data-id="'. $ligne["idLog"].'" ><button type="button" class="btn btn-outline-success btn-rounded waves-effect"  ><i class="fas fa-cogs pr-2"
        aria-hidden="true"></i>VISITER</button> </a>';

        $chain.= '</div>';

        $chain.= '<div class="col-md-6">';


        $chain .= '<button type="button" class="btn btn-outline-danger id_input btn-rounded waves-effect" data-id="'. $ligne["idLog"].'" ><i class="fas fa-remove pr-2"aria-hidden="true"></i>DELETE</button>';

        $chain.= '</div>';
        $chain.= '</div>';

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

/* ########### Récupération liste vente #################### */
function echo_liste_logement_vente($admin=false){
  global $USER_DB, $PASSWORD_DB, $NAME_DB, $HOST_DB;

  $user       = $USER_DB;
  $pass       = $PASSWORD_DB;
  $db_name    = $NAME_DB;
  $host       = $HOST_DB;

  $dbh = new PDO('mysql:host='.$host.';dbname='.$db_name, $user, $pass);

  try {
    $query = "SELECT idLog, typelogement, typeTransaction, prix, localite, nbrePiece,description, photo FROM logement WHERE typeTransaction = 'vente' ;";

    $stmt = $dbh->prepare($query);
    $stmt->execute();
    if($admin === false){

      while( $ligne = $stmt->fetch(PDO::FETCH_ASSOC) ){


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

        $chain .= '<h6> <em>' . $ligne["nbrePiece"] .' '.'piéces'. '</em></h6>';

        $chain .= '<h5 style = "text-align : center">' . $ligne["localite"] . '</h5> </br>';

        $chain .= '<h3 style = "text-align : center">' . $ligne["prix"].' '.'fcfa'. '</h3>';    

        $chain .= '<p>' . $ligne["description"] . '</p>';


        $chain .= '<label for="show-menu" class="menu-button id_input glyphicon glyphicon-remove"></label>';

        $chain.= '<div class="form-group row">';

        $chain.= '<div class="col-md-6">';
        
        $chain .= ' <a href="#details-lightbox-7" class="popup-with-move-anim id_input_visite " data-id="'. $ligne["idLog"].'" ><button type="button" class="btn btn-outline-success btn-rounded waves-effect"  ><i class="fas fa-cogs pr-2"
        aria-hidden="true"></i>VISITER</button> </a>';

        $chain.= '</div>';


        // if( isset($_SESSION["admin"]) ){
        //   $chain.= '<div class="col-md-6">';
        //   $chain .= '<button type="button" class="btn btn-outline-danger id_input btn-rounded waves-effect" data-id="'. $ligne["idLog"].'" ><i class="fas fa-remove pr-2"aria-hidden="true"></i>DELETE</button>'; 
        //   $chain.= '</div>';                 
        // }

        $chain.= '<div class="col-md-6">';
        $chain .= '<button type="button" class="btn btn-outline-danger id_input btn-rounded waves-effect" data-id="'. $ligne["idLog"].'" ><i class="fas fa-remove pr-2"aria-hidden="true"></i>DELETE</button>';
        $chain.= '</div>';

        $chain.= '</div>';

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


<!-- PopUp de visite : ou mettre dans une page -->

<div id="details-lightbox-7" class="lightbox-basic zoom-anim-dialog mfp-hide">
  <div class="container">
    <div class="row">
      <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
      <div id="block_viste" class="col-lg-8"> 
        <!-- Affiché le logement en question -->
        <h5>logement</h5>


      </div>
      <!-- Formulaire de RDV -->
      <div class="col-lg-4">
        <form action="rdv.php" method="post">
          <fieldset >

            <legend>Prise de rendez vous</legend>

            <div class="form-group">
              <label for="nom">Nom </label>
              <input type="text" class="form-control" id="nom" name="nom" placeholder="votre nom">
            </div>

            <div class="form-group">
              <label for="prenom">Prenom </label>
              <input type="text" class="form-control" id="prenom" name="prenom" placeholder="votre prenom">
            </div>

            <div class="form-group">
              <label for="telephone">Téléphone </label>
              <input type="text" class="form-control" id="telephone" name="telephone" placeholder="votre numéro tel">
            </div>

            <div class="form-group">
              <label for="date">Date souhaitée </label>
              <input id="date" class="input-form" name="date" type="date" value="<?php echo date("Y-m-d") ?>">
            </div>

            <button type="submit" name="submit" class="btn btn-outline-success btn-rounded waves-effect"  ><i class="fas fa-calendar pr-2"
              aria-hidden="true"></i>Valider RDV</button> 
            </fieldset>
          </form>

        </div> 
      </div> 
    </div> 
  </div> 