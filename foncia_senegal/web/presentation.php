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
                <h2><em> Qui Sommes-Nous ? </em></h2>
            </div> 
        </div> 
    </div> 
    <!-- end of header -->

    
    <!--<h3 class="page-header" align="center" >Qui Sommes-Nous ?</h3>-->

    <div id="node-27" class="node node-page clearfix" about="/qui-sommes-nous" typeof="foaf:Document">


        <span property="dc:title" content="Qui sommes-nous ?" class="rdf-meta element-hidden"></span><span property="sioc:num_replies" content="0" datatype="xsd:integer" class="rdf-meta element-hidden" ></span>
        
        <div class="content">

            <table align="center" style="height:837px;width:932px;color: #337ab7;"><tbody><tr><td style="vertical-align:top;">
                <h3>Depuis 2010,</h3>
                <p> FONCIA accompagne ses clients tout au<br />
                    long de leurs projets immobiliers, qu'il s'agisse<br />
                    d'acheter, de louer, de vendre ou de gerer un<br />
                bien.</p>
                <p> </p>
                <h3>Porte feuilles de 100 mandats de Gerance</h3>
                <p>Ils mettent toute leur Efficacite, leur Energie<br />
                    et leur experience dans la reussite des missions<br />
                qui leur sont confiées.</p>
                <p> </p>
                <h3> 
                FONCIA s impose Aujourd hui Comme un Acteur Incontournable de l'immobilier</h3>
                <p>Nous cherchons et installons les locataires<br />
                    ayant de solides garanties de solvabilites<br />
                    Nous faisons des comptes rendus permanents a nos mandant<br />
                </p></td>
                <td style="vertical-align:top;">

                    <!--<p><img alt="" src="images/imm13.jpg" style="height:261px;width:400px;" /></p>-->

                    <h3>COMMERCIALISATION DE VOTRE BIEN</h3><br />
                    <h5>    <p> <li>Valorisation du bien : estimation du loyer le mieux adapte au marche,
                    a la situation du bien, sa configuration et aux prestations fournies.</li> <br/>
                    <li>Evaluation des travaux eventuels a effectuer avant toute relocation,
                    respect des normes de sécurite, de decence et d'habitabilité.</li> <br />
                    <li>Recherche de locataires, etude des dossiers des candidats locataires,
                    verifications des renseignements fournis (banque, employeur, ancien bailleur)</li> <br/>

                </p>
            </h5>           

        </td>
    </tr></tbody></table></p>



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
                    <a href="index.php">Home</a><i class="fa fa-angle-double-right"></i><span>Qui Sommes-Nous ?</span>
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