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

    <!-- Header -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12" style="text-align: center;">
                <h2><em> Termes et condition générales </em></h2>
            </div> 
        </div> 
    </div> 
    <!-- end of header -->

    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">







                      <div class="ex-basic-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <div class="text-container">
                                        <h3> ARTICLE 1 : Objet</h3>
                                        <p>Les présentes « conditions générales d'utilisation » ont pour objet l'encadrement juridique de l’utilisation du site Sen FONCIA et de ses services.

                                            <br>Ce contrat est conclu entre :</br>

                                            Le gérant du site internet, ci-après désigné « l’Éditeur »,

                                            <br>Toute personne physique ou morale souhaitant accéder au site et à ses services, ci-après appelé « l’Utilisateur ».</br>

                                            Les conditions générales d'utilisation doivent être acceptées par tout Utilisateur, et son accès au site vaut acceptation de ces conditions.
                                        </p>
                                        <h3>ARTICLE 2 : Mentions légales</h3>

                                        <p>Pour les personnes morales :

                                            <br>Le site Sen FONCIA est édité par la société Foncia SENEGAL, statut juridique SARL au capital de 10.000.000 FCFA, dont le siège social est situé au Au Almadies/Dakar.</br>

                                            La société est représentée par SALL ARAME.


                                            Pour les personnes physiques : 

                                            <br>Le site sen FONCIA est édité par SALL ARAME , domicilié à DAKAR .</br></p>

                                            <h3>ARTICLE 3 : accès aux services</h3>

                                            <p>L’Utilisateur du site Sen FONCIA a accès aux services suivants :

                                                <br><a class="turquoise" href="#your-link">Louer</a></br> 
                                                •   <br><a class="turquoise" href="#your-link">Acheter </a></br>  
                                                •   <br><a class="turquoise" href="#your-link">vendre</a></br> 
                                                •   <br><a class="turquoise" href="#your-link">Logement</a></br> </br>



                                                Tout Utilisateur ayant accès a internet peut accéder gratuitement et depuis n’importe où au site.
                                                <br> Les frais supportés par l’Utilisateur pour y accéder (connexion internet, matériel informatique, etc.) ne sont pas à la charge de l’Éditeur.</br>

                                                Les services suivants ne sont pas accessible pour l’Utilisateur que s’il est membre du site (c’est-à-dire qu’il est identifié à l’aide de ses identifiants de connexion) :
                                                •<br><a class="turquoise" href="#your-link">Inscription</a></br> 
                                                •<br><a class="turquoise" href="#your-link">Connexion</a></br> </br>



                                                Le site et ses différents services peuvent être interrompus ou suspendus par l’Éditeur, notamment à l’occasion d’une maintenance, sans obligation de préavis ou de justification.
                                            </p>


                                            <h3>ARTICLE 4 : Responsabilité de l’Utilisateur</h3>

                                            <p>L'Utilisateur est responsable des risques liés à l’utilisation de son identifiant de connexion et de son mot de passe. 

                                                Le mot de passe de l’Utilisateur doit rester secret. En cas de divulgation de mot de passe, l’Éditeur décline toute responsabilité.

                                                L’Utilisateur assume l’entière responsabilité de l’utilisation qu’il fait des informations et contenus présents sur le site Sen Foncia.

                                                Tout usage du service par l'Utilisateur ayant directement ou indirectement pour conséquence des dommages doit faire l'objet d'une indemnisation au profit du site.

                                                <br>Le site permet aux membres de publier sur le site :</br>
                                                •<br>   Commentaires ;</br>
                                                •<br>   Oeuvres ;</br>
                                                •<br>   Etc.</br>

                                                Le membre s’engage à tenir des propos respectueux des autres et de la loi et accepte que ces publications soient modérées ou refusées par l’Éditeur, sans obligation de justification. 

                                                En publiant sur le site, l’Utilisateur cède à la société éditrice le droit non exclusif et gratuit de représenter, reproduire, adapter, modifier, diffuser et distribuer sa publication, directement ou par un tiers autorisé.

                                                L’Éditeur s'engage toutefois à citer le membre en cas d’utilisation de  sa publication

                                            </p>

                                            <h3>ARTICLE 5 : Responsabilité de l’Éditeur</h3>

                                            <p>
                                                Tout dysfonctionnement du serveur ou du réseau ne peut engager la responsabilité de l’Éditeur.

                                                De même, la responsabilité du site ne peut être engagée en cas de force majeure ou du fait imprévisible et insurmontable d'un tiers.

                                                Le site Sen FONCIA s'engage à mettre en œuvre tous les moyens nécessaires pour garantir la sécurité et la confidentialité des données. Toutefois, il n’apporte pas une garantie de sécurité totale.

                                                L’Éditeur se réserve la faculté d’une non-garantie de la fiabilité des sources, bien que les informations diffusées su le site soient réputées fiables.

                                            </p>

                                            <h3>ARTICLE 6 : Propriété intellectuelle</h3>

                                            <p>Les contenus du site Sen FONCIA (logos, textes, éléments graphiques, vidéos, etc.) son protégés par le droit d’auteur, en vertu du Code de la propriété intellectuelle.

                                                L’Utilisateur devra obtenir l’autorisation de l’éditeur du site avant toute reproduction, copie ou publication de ces différents contenus.

                                                Ces derniers peuvent être utilisés par les utilisateurs à des fins privées ; tout usage commercial est interdit.

                                                L’Utilisateur est entièrement responsable de tout contenu qu’il met en ligne et il s’engage à ne pas porter atteinte à un tiers.

                                                L’Éditeur du site se réserve le droit de modérer ou de supprimer librement et à tout moment les contenus mis en ligne par les utilisateurs, et ce sans justification.
                                            </p3>


                                            <h3>ARTICLE 7 : Données personnelles</h3>

                                            <p>L’Utilisateur doit obligatoirement fournir des informations personnelles pour procéder à son inscription sur le site. 

                                                L’adresse électronique (e-mail) de l’utilisateur pourra notamment être utilisée par le site Sen FONCIA pour la communication d’informations diverses et la gestion du compte.

                                                Senfoncia.com garantie le respect de la vie privée de l’utilisateur, conformément à la loi n°78-17 du 6 janvier 1978 relative à l'informatique, aux fichiers et aux libertés.

                                                <br>Le site est déclaré auprès de la CNIL sous le numéro suivant : [00000].</br>

                                                En vertu des articles 39 et 40 de la loi en date du 6 janvier 1978, l'Utilisateur dispose d'un droit d'accès, de rectification, de suppression et d'opposition de ses données personnelles.<br> 
                                                L'Utilisateur exerce ce droit via :
                                                •<br><a class="turquoise" href="#your-link">Son espace personnel sur le site </a></br>
                                                •<br><a class="turquoise" href="#your-link">Un formulaire de contact</a></br> 
                                                •<br><a class="turquoise" href="#your-link">Par mail à admin@gmail.com</a></br> 
                                                •<br><a class="turquoise" href="#your-link">Par voie postale au Almadies zone 1 DAKAR</a></br>



                                            </p>

                                            <h3>ARTICLE 8 : Liens hypertextes</h3>

                                            <p>Les domaines vers lesquels mènent les liens hypertextes présents sur le site n’engagent pas la responsabilité de l’Éditeur de Senfoncia.com , qui n’a pas de contrôle sur ces liens.<br>

                                                Il est possible pour un tiers de créer un lien vers une page du site SenFoncia.com sans autorisation expresse de l’éditeur.
                                            </p>

                                            <h3>ARTICLE 9 : Évolution des conditions générales d’utilisation</h3>

                                            <p>Le site Senfoncia.com se réserve le droit de modifier les clauses de ces conditions générales d’utilisation à tout moment et sans justification.
                                            </p>

                                            <h3>ARTICLE 10 : Durée du contrat<h/3>

                                                <p>La durée du présent contrat est indéterminée. Le contrat produit ses effets à l'égard de l'Utilisateur à compter du début de l’utilisation du service.
                                                </p>

                                                <h3>ARTICLE 11 : Droit applicable et juridiction compétente</h3>

                                                <p>Le présent contrat dépend de la législation française. 
                                                    En cas de litige non résolu à l’amiable entre l’Utilisateur et l’Éditeur, les tribunaux de [nom de ville] sont compétents pour régler le contentieux.

                                                </p>

                                                <div class="text-container last">

                                                    <a class="btn-outline-reg" href="index.php">BACK</a>
                                                </div> <!-- end of text-container -->
                                            </div>
                                        </div> <!-- end of row -->
                                    </div> <!-- end of container -->
                                </div> <!-- end of ex-basic -->
                                <!-- end of terms content -->



                                <!-- Breadcrumbs -->
                                <div class="ex-basic-1">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="breadcrumbs">
                                                    <a href="index.php">Home</a><i class="fa fa-angle-double-right"></i><span>Termes et condition générales</span>
                                                </div> 
                                            </div> 
                                        </div> 
                                    </div> 
                                </div> 
                                <!-- end of breadcrumbs -->





                                <!-- Scripts -->
                                <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
                                <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
                                <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
                                <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
                                <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
                                <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
                                <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
                                <script src="js/scripts.js"></script> <!-- Custom scripts -->
                            </body>
                            </html>