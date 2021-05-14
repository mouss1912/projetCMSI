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
                    <a class="nav-link page-scroll" href="#pricing">Louer ou Acheter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#pricing">Faire Gérer</a>
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
                            <p class="p-large">Bienvenue dans votre Agence immobilliére ...</p>
                            <a class="btn-solid-lg page-scroll" href="#services">DECOUVRIR</a>

                            <a id="btn_connexion" class="btn-solid-lg popup-with-move-anim" href="#details-lightbox-3">CONNEXION</a>

                            <!--  <a id="btn_inscripion" class="btn-solid-lg popup-with-move-anim" href="#details-lightbox-5">INSCRIPTION</a> -->
                            <?php 
                            if( isset($_SESSION["connecter"]) == false ){
                             ?>
                             <a id="btn_inscripion" class="btn-solid-lg popup-with-move-anim" href="#details-lightbox-2">INSCRIPTION</a>
                             <?php
                         }
                         ?>
                     </div> 
                 </div> 
             </div> 
         </div> 
     </div> 
 </header> 
 <!-- end of header -->

 <!-- Details Lightbox 2 -->
 <div id="details-lightbox-2" class="lightbox-basic zoom-anim-dialog mfp-hide">
    <div class="container">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-4"> 
                <h5>Inscription</h5>
                <p>Inscrivez vous pour devenir client</p>
                <p>Si vous n'avait pas d'identfiant ou de mot de passe, veuillez nous contacter </p>
                <ul class="list-unstyled li-space-lg">
                    <li class="media">
                        <i class="fas fa-check"></i><div class="media-body">Fourni un accés au drive </div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i><div class="media-body">Accées à la liste des clients</div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-7">
                <form data-toggle="validator" data-focus="false">
                   <div class="form-group">
                    <input type="text" class="form-control-input" id="cnom" required >
                    <label class="label-control" for="cnom">Nom</label>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control-input" id="cprenom" required>
                    <label class="label-control" for="cprenom">Prénom</label>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control-input" id="cemail" name="cemail" required>
                    <label class="label-control" for="cemail">Mail *</label>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control-input" id="cmdp" name="cmdp" required>
                    <label class="label-control" for="cmdp">Mot de passe *</label>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                 <input type="text" class="form-control-input" id="ctel" required>

                 <label class="label-control" for="ctel" >Telephone</label>
                 <div class="help-block with-errors"></div>
             </div>
             <div class="form-group">
                <input type="text" class="form-control-input" id="cadresse" required>
                <label class="label-control" for="cadresse">Adresse</label>
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
                <label for="ccivilite">Civilité</label>
                <select class="form-control" id="ccivilite">
                  <option>Mr</option>
                  <option>Mme</option>
              </select>
          </div>
          <div id="connect_error" class="help-block with-errors"></div>

          <div class="form-group" style=" text-align: center;">
            <input type="button" class="btn-solid-reg as-button" value="INSCRIPTION" onclick="register()">
            <a class="btn-outline-reg mfp-close as-button" href="#screenshots">RETOUR</a>
        </div>
    </form>
</div> 
</div> 
</div> 
</div> 
<!-- end of details lightbox 2 -->
<!-- end of details lightboxes -->







<!-- Contact -->
<?php
include 'footer.php';
?>

</body>
</html>
