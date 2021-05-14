
<title>Politique de confidentialité</title>
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
                <h2><em> Politique de confidentialité </em></h2>
            </div> 
        </div> 
    </div> 
    <!-- end of header -->

    <!-- Privacy Content -->
    <div class="ex-basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="text-container">
                        <h3>Données privées que nous recevons et collectons</h3>
                        <p>Senfoncia collecte et reçoit également automatiquement certaines informations provenant de votre ordinateur ou de votre appareil mobile, y compris les activités que vous effectuez sur notre Site Internet, les Plateformes et les Applications, le type de matériel et de logiciel que vous utilisez (par exemple, votre système d'exploitation ou votre navigateur), et les informations obtenues à partir de cookies.  Par exemple, chaque fois que vous visitez le site Web ou que vous utilisez autrement les services, nous recueillons automatiquement votre adresse IP, le type de navigateur et d'appareil, les temps d'accès, la page Web d'où vous venez, les régions à partir desquelles vous naviguez sur la page Web et la ou les pages Web auxquelles vous accédez (le cas échéant).
                        </p>
                        <p>Lorsque vous vous inscrivez pour la première fois à un compte Senfoncia, et lorsque vous utilisez les services, nous recueillons certaines informations. <a class="turquoise" href="#your-link">informations personnelles</a> vous concernant, telles que:</p>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-unstyled li-space-lg indent">
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">La zone géographique où vous utilisez votre ordinateur et vos appareils mobiles</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">Votre nom complet, votre nom d'utilisateur, votre adresse électronique et autres coordonnées.</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">Un identifiant unique de l'utilisateur de Senfoncia (une chaîne alphanumérique) qui vous est attribué lors de votre inscription.</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">D'autres informations facultatives dans le cadre du profil de votre compte</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">votre adresse IP et, le cas échéant, l'horodatage lié à votre consentement et à la confirmation de celui-ci.</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">D'autres informations soumises par vous ou par vos représentants organisationnels via diverses méthodes</div>
                                    </li>
                                </ul>
                            </div> <!-- end of col -->

                            <div class="col-md-6">
                                <ul class="list-unstyled li-space-lg indent">
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">Votre adresse de facturation et toute autre information nécessaire à la réalisation d'une transaction financière. Lorsque vous effectuez des achats par le biais des services, nous pouvons également recueillir les informations relatives à votre carte de crédit ou à PayPal.</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">le contenu généré par les utilisateurs (tels que les messages, les posts, les commentaires, les pages, les profils, les images, les flux ou les communications échangés sur les plateformes prises en charge).</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">les images ou autres fichiers que vous pouvez publier via nos services.</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">Les informations (telles que les messages, les posts, les commentaires, les pages, les profils, les images) que nous pouvons recevoir en rapport avec les communications que vous nous envoyez, telles que les demandes ou les commentaires concernant</div>
                                    </li>
                                </ul>
                            </div> <!-- end of col -->
                        </div> <!-- end of row -->
                    </div> <!-- end of text-container-->
                    
                    <div class="text-container">
                        <h3>Comment utilisons-nous les données de la page d'accueil de Senfoncia ?</h3>
                        <p>Senfoncia SaaS Landing Page Template utilise les données des visiteurs aux fins générales suivantes:</p>
                        <ol class="li-space-lg">
                            <li>Pour vous identifier lorsque vous vous connectez à votre compte</li>
                            <li>Pour nous permettre d'exploiter les Services et de vous les fournir</li>
                            <li>Pour vérifier vos transactions et pour la confirmation des achats, la facturation, la sécurité et l'authentification (y compris les jetons de sécurité pour la communication avec les installés)</li>
                            <li>Analyser le site Web ou les autres services et les informations concernant nos visiteurs et utilisateurs, y compris les recherches sur les données démographiques et le comportement des utilisateurs afin d'améliorer notre contenu et nos services.</li>
                            <li>Vous contacter au sujet de votre compte et fournir un service d'assistance à la clientèle, y compris répondre à vos commentaires et questions.</li>
                            <li>Partager des statistiques globales (non identifiables) sur les utilisateurs des services avec des annonceurs et des partenaires potentiels.</li>
                            <li>Vous tenir informé des services, des fonctionnalités, des enquêtes, des bulletins d'information, des offres, des enquêtes, des bulletins d'information, des offres, des concours et des événements que nous pensons pouvoir vous être utiles ou que vous nous avez demandés.</li>
                            <li>pour vous vendre ou commercialiser les produits et services de Senfoncia Landing Page</li>
                            <li>Pour mieux comprendre vos besoins et les besoins des utilisateurs dans l'ensemble, diagnostiquer les problèmes, analyser les tendances, améliorer les fonctionnalités et la convivialité des Services, et mieux comprendre et commercialiser nos clients et utilisateurs</li>
                            <li>Assurer la sûreté et la sécurité des services</li>
                            <li>Nous utilisons également des informations non identifiables recueillies à des fins statistiques pour suivre le nombre de visites sur les Services en vue d'introduire des améliorations et d'améliorer la convivialité des Services. Nous pouvons partager ce type de données statistiques pour que nos partenaires comprennent également la fréquence d'utilisation des services, afin qu'ils puissent eux aussi vous offrir une expérience optimale.</li>
                        </ol>
                    </div> <!-- end of text-container -->

                    <div class="text-container">
                        <h3>Contenu des clients que nous traitons pour les clients</h3>
                        <p>Senfoncia est un outil de modèle de page d'atterrissage HTML. De par sa nature, les services permettent à nos clients de promouvoir leurs produits et services en intégrant des centaines d'applications professionnelles qu'ils utilisent déjà, le tout en un seul endroit.</p>
                        <p>Les services permettent à nos clients de promouvoir leurs produits et services, de faire du marketing et de la publicité, d'attirer des publics, de programmer et de publier des messages et d'analyser les résultats..</p>
                    </div> <!-- end of text container -->

                    <div class="text-container">
                        <h3>Consentement à l'utilisation de la page d'accueil de Senfoncia</h3>
                        <p class="mb-5">En utilisant l'un des services, ou en soumettant ou en recueillant des informations personnelles via les services, vous consentez à la collecte, au transfert, au stockage, à la divulgation et à l'utilisation de vos informations personnelles de la manière décrite dans la présente politique de confidentialité. Si vous ne consentez pas à l'utilisation de vos informations personnelles de cette manière, veuillez cesser d'utiliser les services..</p>
                    </div> 
                    
                    <a class="btn-outline-reg back" href="index.php">BACK</a>
                </div> <!-- end of col-->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-2 -->
    <!-- end of privacy content -->





    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <a href="index.php">Home</a><i class="fa fa-angle-double-right"></i><span>Politique de confidentialité</span>
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