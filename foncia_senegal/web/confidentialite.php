
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
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Politique de confidentialité</h1>
                </div>
            </div> 
        </div> 
    </header> 
    <!-- end of header -->


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