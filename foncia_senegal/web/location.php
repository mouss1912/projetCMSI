<?php
session_start();
include 'entete.php';

include("../vars.php");
global $USER_DB, $PASSWORD_DB, $NAME_DB, $HOST_DB;

$user     = $USER_DB;
$pass     = $PASSWORD_DB;
$db_name  = $NAME_DB;
$host     = $HOST_DB;

$dbh = new PDO('mysql:host='.$host.';dbname='.$db_name, $user, $pass);

?>



<!-- Debut du corps du site -->
<body data-spy="scroll" data-target=".fixed-top">

    <!-- Preloader -->
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.php">Evolo</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="index.php"><img src="images/foncia.png" alt="alternative"></a>
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.php">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link page-scroll" href="#pricing">Transaction</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.php#services">Faire Gérer</a>
                </li>

                <!-- Dropdown Menu -->          
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="listeLogement.php" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Logement</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="location.php"><span class="item-text">Location</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="vente.php"><span class="item-text">Vente</span></a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="index.php#about" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">About</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="term.php"><span class="item-text">Terms Conditions</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="confidentialite.php"><span class="item-text">confidentialité</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="presentation.php"><span class="item-text">Présentation</span></a>
                    </div>
                </li>
                <!-- end of dropdown menu -->

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.php#contact">Contact</a>
                </li>
                <?php
                if( isset($_SESSION["admin"]) ){
                    ?>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="index.php#admin_add_adh">Admin</a>
                    </li>
                    <?php
                }
                ?>
            </ul>
            <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="">
                        <i class="fas fa-circle fa-stack-2x facebook"></i>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x twitter"></i>
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </a>
                </span>
            </span>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->

    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h1><span class="turquoise"> Sen </span> Foncia </h1>

                        </div> 
                    </div> 
                </div> 
            </div> 
        </div> 
    </header> 
    <!-- end of header -->


    <!-- Image Slider -->
    <h3 style="text-align: center;"> <em> Notre Sélection du jour  </em></h3>

    <div class="slider-container">
        <div class="swiper-container image-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="image-container">
                        <img class="img-responsive" src="images/min/image4.jpg" alt="alternative">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image-container">
                        <img class="img-responsive" src="images/min/image8.jpg" alt="alternative">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image-container">
                        <img class="img-responsive" src="images/min/image6.jpg" alt="alternative">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image-container">
                        <img class="img-responsive" src="images/min/image7.jpg" alt="alternative">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image-container">
                        <img class="img-responsive" src="images/min/image7.jpg" alt="alternative">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image-container">
                        <img class="img-responsive" src="images/min/image6.jpg" alt="alternative">
                    </div>
                </div>
            </div> 
        </div> 
    </div> 
    <!-- end of image slider -->

   <!-- Customers -->
    <div class="filtreLogement">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="slider-container">
                       <form action="listeLogement.php" method="post" id="formu">
                        <div class="form-row">

                            <div class="col">
                                <select class="custom-select custom-select-lg" name="typeLogement" id="typeLogement">
                                  <option selected>Type de bien</option>
                                  <option value="appartement">Appartement</option> 
                                  <option value="chambre">Chambre</option>
                                  <option value="maison">Maison</option>
                                  <option value="terrain">Terrain</option>
                              </select>
                          </div>

                          <div class="col">
                              <select class="custom-select custom-select-lg " id="localite" name="localite">
                                  <option selected>Localisation</option>
                                  <?php
                                  $query = "SELECT DISTINCT localite FROM logement;";
                                  $stmt = $dbh->prepare($query);
                                  $stmt->execute();
                                  while( $result1 = $stmt->fetch(PDO::FETCH_ASSOC) ){
                                    echo "<option value=".$result1["localite"]."> ".$result1['localite']."</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <div class="col">
                          <select class="custom-select custom-select-lg " id="nbrePiece" name="nbrePiece">
                              <option selected>Nbre de Piéce</option>
                              <?php
                              $query = "SELECT DISTINCT nbrePiece FROM logement;";
                              $stmt = $dbh->prepare($query);
                              $stmt->execute();
                              while( $result2 = $stmt->fetch(PDO::FETCH_ASSOC) ){
                                echo "<option value=".$result2["nbrePiece"]."> ".$result2['nbrePiece']."</option>";
                            }
                            ?>
                        </select>
                    </div>

                        <!-- <div class="col">                         
                            <input class="form-control" type ="number" id="prix" name="prix" min ="100000" placeholder="prix Max">
                        </div> -->

                        <button type="button" class="btn btn-primary btn-lg " onclick="rechercher()">Rechercher</button>
                    </div>

                </form>
            </div>
        </div>
    </div>


        <!-- Liste des logements : A reprendre  -->
        <div id="services" class="cards-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2> <em> Nos Logements en location</em></h2>
                        <p class="p-heading p-large"> Liste des logements disponibles</p>
                    </div> 
                </div> 
                <div class="row">
                    <?php
                    echo_liste_logement_location();
                    ?>
                </div> 
            </div> 
        </div> 


        <!-- Boutton pour ajouter un bien -->
        <?php
    if( isset($_SESSION["admin"]) ){
        ?>
       <!--  <a id="btn_ajout" class="btn-solid-lg popup-with-move-anim" href="#details-lightbox-6" style="text-align: center; margin-left:50%;">AJOUTER UN BIEN</a> -->
        <?php
    }
    ?>
    <a id="btn_ajout" class="btn-solid-lg popup-with-move-anim" href="#details-lightbox-6" style="text-align: center; margin-left:50%;">AJOUTER UN BIEN</a>
        <!--   ########################. details-lightbox-5 #############################-->
        <!-- vérification du fichier image uploader -->

        <?php
        if(!empty($_FILES)){
            require("imgClass.php");
            $img = $_FILES['img'];
            $ext = strtolower(substr($img['name'],-3));
            $allow_ext = array("jpg","jpeg",'png','gif');
            if(in_array($ext,$allow_ext)){
                move_uploaded_file($img['tmp_name'],"images/".$img['name']);
                Img::creerMin("images/".$img['name'],"images/min",$img['name'],315,212);
                Img::convertirJPG("images/".$img['name']);
            }
            else{
                $erreur = "Votre fichier n'est pas une image";
            }
        }

        ?>


        <!-- recupération des images dans le dossier min -->
        <?php
        $dos = "images/min";
        $dir = opendir($dos);
        while($file = readdir($dir)){
            $allow_ext = array("jpg","jpeg",'png','gif');
            $ext = strtolower(substr($file,-3));
            if(in_array($ext,$allow_ext)){
                ?>
       <!--  <div class="min">
            <a href="images/<?php 
            //echo $file; ?>" rel="zoombox[galerie]">
                <img src="images/min/<?php
                // echo $file; ?>"/>
                <h3><?php 
                //echo $file; ?></h3>
            </a>
        </div> -->
        <?php
    }
}
?>

<!-- affichage d'erreur de téléchargement -->
<?php
if(isset($erreur)){
    echo $erreur;
}

?>

<!-- Limiteur de caractére -->
<script>
  function limiteur()
  {
    maximum = 50;
    champ = document.formulaire.texte;
    indic = document.formulaire.indicateur;

    if (champ.value.length > maximum)
      champ.value = champ.value.substring(0, maximum);
  else 
      indic.value = maximum - champ.value.length;
}
</script>



<!-- formulaire d'ajout de logement -->
<div id="details-lightbox-6" class="lightbox-basic zoom-anim-dialog mfp-hide">
    <div class="container">
        <form name="formulaire" action="listeLogement.php" method="post" id="formu" enctype="multipart/form-data" style="text-align: center;" >

            <h1><b>Ajouter un logement<b></h1></br>


                <div class="form-check form-check-inline col-lg-3">
                    <input class="form-check-input" type="radio" name="typeTransaction"  id="typeTransaction" value="vente" />
                    <label class="form-check-label">Vente</label>
                </div>
                <div class="form-check form-check-inline">

                    <input type="radio" name="typeTransaction" id="typeTransaction" value="location" checked />
                    <label class="form-check-label">Location</label>
                </div>
                <br>

                <div class="col">
                  <label for="typeLogement">Type de logement</label></br>
                  <select class="custom-select custom-select-lg" name="typeLogement" id="typeLogement" required>
                   <option selected>Type de bien</option>
                   <option value="appartement">Appartement</option> 
                   <option value="chambre">Chambre</option>
                   <option value="maison">Maison</option>
                   <option value="terrain">Terrain</option>
               </select>
           </div>

           <div class="form-group">
            <label for="nomProprio">Nom propriétaire</label>
            <input type="text" class="form-control" id="nomProprio" placeholder="nom du propretaire">
        </div>

        <div class="form-group">
            <label for="prenomProprio">Prenom propriétaire</label>
            <input type="text" class="form-control" id="prenomProprio" placeholder="prenom du propretaire">
        </div>

        <div class="form-group">
            <label for="email">Courriel</label>
            <input type="text" class="form-control" id="email"  name="email" placeholder="Tex@gmail.com">
        </div>

        <div class="form-group">
            <label for="localite">Localite</label>
            <input type="text" class="form-control" id="localite"  name="localite" placeholder="localite du bien">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="texte" id="description" name="description" placeholder="description du bien"  onKeyDown="limiteur();" onKeyUp="limiteur();"></textarea>
            <br>
            Il vous reste <input readonly type=text name="indicateur" size="3" maxlength=3 value="50"> caractères.

        </div>

        <div class="form-group">
            <label for="prix">Prix</label>
            <input type="number" class="form-control" id="prix"  name="prix" min="10000" >
        </div>

        <div class="col">
            <label for="nbrePiece">Nombre de piéce</label></br>
            <select class="custom-select custom-select-lg" name="nbrePiece" id="nbrePiece">
               <option selected>Nombre de piéce </option>
               <option value="0"> 0</option> 
               <option value="1"> 1 </option> 
               <option value="2"> 2 </option>
               <option value="3"> 3 </option>
               <option value="4"> 4 </option>
               <option value="5"> 5 </option> 
               <option value="6"> 6 </option>
               <option value="7"> 7 </option>
               <option value="8"> 8 </option>
           </select>
       </div>


       <div class="form-group">
        <label for="date">Date d'ajout</label>
        <input type="date" class="form-control" id="date" name="date" min="2021-05-12" max="2022-12-31">
    </div>

    <div class="form-group">
        <label for="img">Photo</label>
        <input type="file" class="form-control" id="img" name="img" type="submit" multiple>
    </div>

    <div class="form-group" style=" text-align: center;">
        <input type="submit" class="btn-solid-reg as-button" value="AJOUTER" onclick="ajouterLogement()">
        <a class="btn-outline-reg mfp-close as-button" href="#screenshots">RETOUR</a>
    </div>
</form>
</div>
</div> 



<!-- Contact -->
<?php
include 'footer.php';
?>

</body>
</html>
