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
                    <a class="nav-link dropdown-toggle page-scroll" href="index.php#about" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">About</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="term.php"><span class="item-text">Terms Conditions</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="confidentialite.php"><span class="item-text">confidentialité</span></a>
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
                <h2><em> Demande de rendez-vous visite envoyé </em></h2>
            </div> 
        </div> 
    </div> 
<!-- end of header -->
<!-- Envoi de message et affichage du message -->

<?php
$message = ''; // Message a  afficher a  l'utilisateur
if (!empty($_POST)) { // le formulaire a été envoyé
	$message = " Merci Votre demande de rendez-vous : ". "Nom = ".$_POST['nom'].", ". "Prenom = " .$_POST['prenom'].", ". "Téléphone = ".$_POST['telephone'].", ". " Date RDV solicitée = " .$_POST['date']. " ". " est bien pris en compte un gestionnaire prendra contact avec vous";
} else { 
	$message = 'aucune donnée envoyée';
}

?>

<?php echo " <h3 >  $message </h3> ";
 $destinataire = "moussasamb1912@gmail.com";
//$destinataire = "sallarame2011@hotmail.fr";
$sujetMessage =  "Demande  de rendez pour visite";
mail($destinataire, $sujetMessage, $message);
?>

<?php
include 'footer.php';
?>