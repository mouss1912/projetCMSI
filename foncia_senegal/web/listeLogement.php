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
<?php
 // function echo_liste_logement($admin=false){
 //        global $USER_DB, $PASSWORD_DB, $NAME_DB, $HOST_DB;

 //        $user       = $USER_DB;
 //        $pass       = $PASSWORD_DB;
 //        $db_name    = $NAME_DB;
 //        $host       = $HOST_DB;

 //        $dbh = new PDO('mysql:host='.$host.';dbname='.$db_name, $user, $pass);

 //        try {
 //            $query = "SELECT typelogement, prix, localite, photo FROM logement;";

 //            $stmt = $dbh->prepare($query);
 //            $stmt->execute();

 //            if($admin === false){

 //                while( $ligne = $stmt->fetch(PDO::FETCH_ASSOC) ){
 //                    echo "<tr>\n";
 //                    foreach ($ligne as $col_value) {
 //                        echo "<td>\n";
 //                        echo $col_value;
 //                        echo "\n</td>\n";
 //                    }
 //                    echo "\n</tr>\n";
 //                }
 //            }
 //            else{
 //                $maile = null;
 //                while( $ligne = $stmt->fetch(PDO::FETCH_ASSOC) ){
 //                    echo "<tr>\n";
 //                    foreach ($ligne as $col_value) {
 //                        if( !(stristr($string, '@') === FALSE) ){
 //                            echo "<td>\n";
 //                            echo $col_value;
 //                            echo "\n</td>\n";
 //                            echo "<td>\n";
 //                            echo '<a class="delete_btn" href="#" data-id='.$col_value.'> Supprimer </a>';
 //                            echo "\n</td>\n";
 //                        }
 //                    }

 //                    echo "\n</tr>\n";
 //                }
 //            }

 //            $stmt->closeCursor();

 //        } 
 //        catch (PDOException $e) {
 //            print "Erreur !: " . $e->getMessage() . "<br/>";
 //            die();
 //        }
 //        $dbh = null;
 //    }


?>

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
                  //  echo_liste_logement();
            ?>
            <div class="col-lg-12">
                <div class="card">                      
                    <img class="card-image" src="images/image1.jpg" alt="alternative">
                    <div class="card-body">
                        <h4 class="card-title">villa 1</h4>
                        <p> description 1 </p>
                    </div>
                </div>
            </div>  
        </div> 
    </div> 
</div> 
<!-- end of services -->




<!-- Contact -->
<?php
include 'footer.php';
?>

</body>
</html>
