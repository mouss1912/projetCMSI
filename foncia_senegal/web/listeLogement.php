<?php
session_start();
include 'entete.php';
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
                    <a class="nav-link page-scroll" href="#header">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#services">Louer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#request">Acheter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#request">Vendre</a>
                </li>

                <!-- <li class="nav-item">
                    <a class="nav-link page-scroll" href="#request">Request</a>
                </li>
            -->
            <!-- Dropdown Menu -->          
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle page-scroll" href="listeLogement.php" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Logement</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="listeLogement.php"><span class="item-text">Terrain</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="listeLogement.php"><span class="item-text">Appartement</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="listeLogement.php"><span class="item-text">Villa</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="listeLogement.php"><span class="item-text">Chambre</span></a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">About</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="term.php"><span class="item-text">Terms Conditions</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="confidentialite.php"><span class="item-text">confidentialité</span></a>
                </div>
            </li>
            <!-- end of dropdown menu -->

            <li class="nav-item">
                <a class="nav-link page-scroll" href="#contact">Contact</a>
            </li>
            <?php
            if( isset($_SESSION["admin"]) ){
                ?>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#admin_add_adh">Admin</a>
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


<!-- Customers -->
<div class="slider-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h5>Trusted By</h5>

                <!-- Image Slider -->
                <div class="slider-container">
                    <div class="swiper-container image-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="image-container">
                                    <img class="img-responsive" src="images/customer-logo-1.png" alt="alternative">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="image-container">
                                    <img class="img-responsive" src="images/customer-logo-2.png" alt="alternative">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="image-container">
                                    <img class="img-responsive" src="images/customer-logo-3.png" alt="alternative">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="image-container">
                                    <img class="img-responsive" src="images/customer-logo-4.png" alt="alternative">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="image-container">
                                    <img class="img-responsive" src="images/customer-logo-5.png" alt="alternative">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="image-container">
                                    <img class="img-responsive" src="images/customer-logo-6.png" alt="alternative">
                                </div>
                            </div>
                        </div> 
                    </div> 
                </div> 
                <!-- end of image slider -->

            </div> 
        </div> 
    </div> 
</div> 
<!-- end of customers -->


<!-- Liste des logements : A reprendre  -->

<!-- Services -->
<div id="services" class="cards-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Logement</h2>
                <p class="p-heading p-large"> Liste des logements (on sépare ou pas)</p>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <?php 
                    // echo '<div class="col-lg-12">';
                    // echo '<div class="card"> ';
                    // echo '<img class="card-image" src="images/image1.jpg" alt="alternative">';
                    // echo '<div class="card-body">';
                    // echo '<h4 class = card-title> villa 1 php </h4>';
                    // echo '<p> description 1</p>';
                    // echo '</div>';

            ?>

            <?php
            echo_liste_logement();
            ?>
            <!-- <div id="content-box">
                <div class="col-lg-12">
                    <div class="card">                      
                        <img class="card-image" src="images/image1.jpg" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">villa 1</h4>
                            <p> description 1 </p>
                        </div>
                    </div>
                </div>
            </div>   -->
        </div> 
    </div> 
</div> 
<!-- end of services -->


<!-- Boutton pour ajouter un bien -->
<a id="btn_ajout" class="btn-solid-lg popup-with-move-anim" href="#details-lightbox-6">AJOUTER UN BIEN</a>
<!--   ########################. details-lightbox-5 #############################-->
<!-- vérification du fichier image uploader -->

<?php
if(!empty($_FILES)){
    require("imgClass.php");
    $img = $_FILES['img'];
    $ext = strtolower(substr($img['name'],-3));
    $allow_ext = array("jpg",'png','gif');
    if(in_array($ext,$allow_ext)){
        move_uploaded_file($img['tmp_name'],"images/".$img['name']);
        Img::creerMin("images/".$img['name'],"images/min",$img['name'],215,112);
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
    $allow_ext = array("jpg",'png','gif');
    $ext = strtolower(substr($file,-3));
    if(in_array($ext,$allow_ext)){
        ?>
        <div class="min">
            <a href="images/<?php echo $file; ?>" rel="zoombox[galerie]">
                <img src="images/min/<?php echo $file; ?>"/>
                <h3><?php echo $file; ?></h3>
            </a>
        </div>
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
<!-- formulaire d'inscription -->
<div id="details-lightbox-6" class="lightbox-basic zoom-anim-dialog mfp-hide">
    <div class="container">
        <form action="listeLogement.php" method="post" id="formu" enctype="multipart/form-data" style="text-align: center;" >

            <h1><b>Ajouter un logement<b></h1></br>

             <label> Type de transaction </label>

             <div >
                <input type="radio" id="typeTransaction" name="typeTransaction"  value="location" 
                checked> 
                <label for="location">Location</label>

                <input type="radio" id="typeTransaction" name="typeTransaction" value="vente">
                <label for="vente">Vente</label> 

                <input type="radio" id="typeTransaction" name="typeTransaction" value="achat">
                <label for="achat">Achat</label>
            </div>

          <!--   <div class="form-group">
                                <input type="text" class="form-control-input" id="cnom" required>
                                <label class="label-control" for="cnom">Nom</label>
                                <div class="help-block with-errors"></div>
                            </div> -->

                            <label for="typeLogement">Type de logement</label></br>
                            <select id="typeLogement" required name="typeLogement">
                                <option value="">---</option>
                                <option value="appartement">Appartement</option> 
                                <option value="chambre">Chambre</option>
                                <option value="maison">Maison</option>
                                <option value="terrain">Terrain</option>
                            </select>



                            <br>
                            <label> Prix </label>
                            <div>
                                <input type ="number" id="prix" name="prix" min="100">
                            </div> 

           <!--  <p>Nom propriétaire</p>

            <div>
                <input type="text" id="proprio" name="proprio" placeholder="votre nom">
            </div> 

            <p>Nom locataire</p>

            <div>
                <input type="text" id="locataire" name="locataire" placeholder="votre nom">
            </div> 

            <p>Courriel</p>

            <div>
                <input type="email"  required placeholder="email" id="mail" name="email" >

            </div> -->

            <label> Localite </label>

            <div>
                <input type="text" id="localite" name="localite" placeholder="localite du bien" >
            </div> 

            <label> Description </label>

            <div>
                <input type="text" id="description" name="description" placeholder="description du bien" >
            </div> 

            <label> Photo </label>
            <div>
              <!--   <input type="url" id="photo" name="photo" placeholder="saisir url"> -->

              <input id="img" type="file" name="img" type="submit" />
          </div> 

          <!--   <input type="file" name="img"/> -->


           <!--  <p>date d'ajout</p>
            <div>
                <input type="date" required id="start" name="date"

                min="2021-04-11" max="2022-12-31">
            </div>  -->

           <!--  <div>
                <input type="submit" name="submit"  id="submit">

            </div> -->

            <div class="form-group" style=" text-align: center;">
                <input type="submit" class="btn-solid-reg as-button" value="AJOUTER" onclick="ajouterLogement()">
                <a class="btn-outline-reg mfp-close as-button" href="#screenshots">RETOUR</a>
            </div>
        </form>
    </div>
</div> 

<!-- <form method="post" action="index.php" enctype="multipart/form-data">
<input type="file" name="img"/>
<input type="submit" name="Envoyer"/>
</form> -->



<!-- Contact -->
<?php
include 'footer.php';
?>

</body>
</html>
