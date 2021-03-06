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
                <!-- <li class="nav-item">
                    <a class="nav-link page-scroll" href="#pricing">Transaction</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#services">Faire Gérer</a>
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
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="presentation.php"><span class="item-text">Présentation</span></a>
                    </div>
                </li>
                <!-- end of dropdown menu -->

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#contact">Contact</a>
                </li>
                <?php
                //if( isset($_SESSION["admin"]) ){
                    ?>
                  <!--   <li class="nav-item">
                        <a class="nav-link page-scroll" href="#admin_add_adh">Admin</a>
                    </li> -->
                    <?php
                //}
                ?>
            </ul>
            <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="https://www.facebook.com/senfonciaCMSI/">
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

<!-- Details 1 -->
<div class="basic-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="text-container">
                    <h2>Liste des clients de l'agence</h2>
                    <p>Pour récupérer leur coordonnées</p>
                    <?php
                    if( isset($_SESSION["connecter"]) ){
                        echo '<a id="btn_connexion" class="btn-solid-lg popup-with-move-anim" href="#details-lightbox-4">LISTE</a>';
                    }
                    else{
                        echo '<a id="btn_connexion" class="btn-solid-lg popup-with-move-anim" href="#details-lightbox-3">LISTE</a>';
                    }
                    ?>
                </div> 
            </div> 
            <div class="col-lg-6">
                <div class="image-container">
                    <img class="img-fluid" src="images/details-1-office-worker.svg" alt="alternative">
                </div> 
            </div> 
        </div> 
    </div> 
</div> 
<!-- end of details 1 -->


<!-- Details 2 -->
<!--  ENVOI DE DOCUMENT PAR LE CLIENT DEPUIS UN FORMULAIRE -->
<div class="basic-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="image-container">
                    <img class="img-fluid" src="images/details-2-office-team-work.svg" alt="alternative">
                </div> 
            </div> 
            <div class="col-lg-6">
                <div class="text-container">
                    <h2>Accés à vos données sur le drive</h2>
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Vous donne accés à un espace</div>
                        </li>
                    </ul>
                    <?php
                    if( isset($_SESSION["connecter"]) ){
                        echo '<a id="btn_connexion" class="btn-solid-lg"  href="https://drive.google.com/drive/folders/1MkSdTgGy_k7B3_gA98lFPy2Q5CNynM5h?usp=sharing" onclick="window.open(this.href); return false;">DRIVE</a>';
                    }
                    else{
                        echo '<a id="btn_connexion" class="btn-solid-lg popup-with-move-anim" href="#details-lightbox-3">DRIVE</a>';
                    }
                    ?>
                </div> 
            </div> 
        </div> 
    </div> 
</div> 
<!-- end of details 2 -->



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


<!-- details-lightbox-3 -->
<!-- formulaire de connexion -->
<div id="details-lightbox-3" class="lightbox-basic zoom-anim-dialog mfp-hide">
    <div class="container">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-5"> 
                <h5>Connexion</h5>
                <p>Connecter vous pour acceder aux services du site. Vous devez être adhérent client chez nous</p>
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

            <div class="col-lg-4">
                <form data-toggle="validator" data-focus="false">
                    <div class="form-group">
                        <input type="email" class="form-control-input" id="cmail" name="cmail" required>
                        <label class="label-control" for="cmail">Mail *</label>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control-input" id="cpassword" name="cpassword" required>
                        <label class="label-control" for="cpassword">Mot de passe *</label>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div id="connect_error" class="help-block with-errors"></div>

                    <div class="form-group">
                        <input type="button" class="btn-solid-reg as-button" value="CONNEXION" onclick="se_connecter()">
                        <a class="btn-outline-reg mfp-close as-button" href="#screenshots">RETOUR</a>
                    </div>
                </form>
            </div> 
        </div> 
    </div> 
</div> 




<!-- end of details lightbox 4 -->

<!-- tableau liste de contact -->
<div id="details-lightbox-4" class="lightbox-basic zoom-anim-dialog mfp-hide">
    <div class="container">
        <div class="row">

            <!-- <input type="text" id="myInput" onkeyup="filter_table()" placeholder="Search.." title="Type in all cols"> -->
            <div class="wrap">
             <div class="search">
              <input id="myInput" onkeyup="filter_table()" type="text" class="searchTerm" placeholder="Rechercher...">
              <button type="submit" class="searchButton">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </div>

    <div id="dad_myTable">
        <table id="myTable">
            <tr class="header">
                <th >nom</th>
                <th >prenom </th>
                <th >mail</th>
                <th >tel</th>
                <th >adresse</th>
            </tr>
            <?php
            if( isset($_SESSION["connecter"]) && $_SESSION["connecter"] ){
                echo_liste_client();
            }
            else{
                echo 'cette page est accessible que si vous êtes connecter';
            }
            ?>
        </table>
    </div>

</div> <!-- end of row -->
</div> <!-- end of container -->
</div> <!-- end of lightbox-basic -->
<!-- end of details lightbox 4 -->


<!-- Pricing -->
<div id="services" class="cards-2">
    <!-- <div id="pricing" class="cards-2"> -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Prix</h2>
                    <p class="p-heading p-large">Nos services</p>
                </div> 
            </div> 
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">Light </div>
                            <div class="card-subtitle"> Vous etes particulier On vous assure la gestion</div>
                            <hr class="cell-divide-hr">
                            <div class="price">
                                <span class="currency">€</span><span class="value">15</span>
                                <div class="frequency">mois</div>
                            </div>
                            <hr class="cell-divide-hr">
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">La gestions de vos logements</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">Syndic</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-times"></i><div class="media-body">Estimation</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-times"></i><div class="media-body">Suivi</div>
                                </li>

                            </ul>
                            <div class="button-wrapper">
                                <a class="btn-solid-reg page-scroll" href="#contact">Nous Contacter</a>
                            </div>
                        </div>
                    </div> 
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">MEDIUM</div>
                            <div class="card-subtitle"> Vous etes particulier On vous assure la gestion</div>
                            <hr class="cell-divide-hr">
                            <div class="price">
                                <span class="currency">€</span><span class="value">30</span>
                                <div class="frequency">mois</div>
                            </div>
                            <hr class="cell-divide-hr">
                            <ul class="list-unstyled li-space-lg">
                             <li class="media">
                                <i class="fas fa-check"></i><div class="media-body">La gestions de vos logements</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i><div class="media-body">Syndic</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i><div class="media-body">Estimation</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-times"></i><div class="media-body">Suivi</div>
                            </li>
                        </ul>
                        <div class="button-wrapper">
                            <a class="btn-solid-reg page-scroll" href="#contact">Nous Contacter</a>
                        </div>
                    </div>
                </div> 
                <div class="card">
                    <div class="label">
                        <p class="best-value">Best Value</p>
                    </div>
                    <div class="card-body">
                        <div class="card-title">COMPLETE</div>
                        <div class="card-subtitle"> Vous etes particulier On vous assure la gestion</div>
                        <hr class="cell-divide-hr">
                        <div class="price">
                            <span class="currency">€</span><span class="value">50</span>
                            <div class="frequency">mois</div>
                        </div>
                        <hr class="cell-divide-hr">
                        <ul class="list-unstyled li-space-lg">
                         <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">La gestions de vos logements</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Syndic</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Estimation</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Suivi</div>
                        </li>
                    </ul>
                    <div class="button-wrapper">
                        <a class="btn-solid-reg page-scroll" href="#contact">Nous Contacter</a>
                    </div>
                </div> 
            </div>

        </div> 
    </div> 
</div> 
</div> 
<!-- end of pricing -->

<!-- Video -->
<div class="basic-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Video</h2>
            </div> 
        </div> 
        <div class="row">
            <div class="col-lg-12">
                <div class="image-container">
                    <div class="video-wrapper">
                        <a class="popup-youtube" href="https://www.youtube.com/watch?v=0gjcsq77itQ" data-effect="fadeIn">
                            <img class="img-fluid" src="images/video-frame.svg" alt="alternative">
                            <span class="video-play-button">
                                <span></span>
                            </span>
                        </a>
                    </div> 
                </div> 
                <p>Présentation vidéo </p>
            </div> 
        </div> 
    </div> 
</div> 
<!-- end of video -->

<!-- About -->
<div id="about" class="basic-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>A propos de l'équipe</h2>
                <p class="p-heading p-large">Rencontrer notre équipe ...</p>
            </div> 
        </div> 
        <div class="row">
            <div class="col-lg-12">
               <div class="team-member">
                <div class="image-wrapper">
                    <img class="img-fluid" src="images/team-member-1.svg" alt="alternative">
                </div> 
                <p class="p-large"><strong>Arame </strong></p>
                <p class="job-title">PDG</p>
                <span class="social-icons">
                    <span class="fa-stack">
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
        <div class="team-member">
            <div class="image-wrapper">
                <img class="img-fluid" src="images/team-member-2.svg" alt="alternative">
            </div> 
            <p class="p-large"><strong>Moussa</strong></p>
            <p class="job-title">Directeur Artistique</p>
            <span class="social-icons">
                <span class="fa-stack">
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
    <div class="team-member">
        <div class="image-wrapper">
            <img class="img-fluid" src="images/team-member-4.svg" alt="alternative">
        </div>
        <p class="p-large"><strong>Linh</strong></p>
        <p class="job-title">Relation clientel</p>
        <span class="social-icons">
            <span class="fa-stack">
                <a href="#your-link">
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
</div> 
</div>
<!-- end of about -->


<!-- Contact -->
<?php
include 'footer.php';
?>

</body>
</html>
