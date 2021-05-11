<?php
include '../vars.php';
require("../functions.php");
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Create a stylish landing page for your business startup and get leads for the offered services with this free HTML landing page template.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Foncia Senegal</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/table.css" rel="stylesheet">
    <link href="css/liste_images.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

    <!-- JS -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/other_function.js"></script>
    <script type="text/javascript" src="js/inscription.js"></script>
    <script type="text/javascript" src="js/logement.js"></script>
    <script type="text/javascript" src="js/recherche.js"></script>

    <!-- Pour les imgaes uploader -->
    <script type="text/javascript" src="zoombox/jquery.js"></script>
    <script type="text/javascript" src="zoombox/zoombox.js"></script> 
    <link rel="stylesheet" type="text/css" href="theme/style.css" /> 
    <link href="zoombox/zoombox.css" rel="stylesheet" type="text/css" media="screen" />


    <?php 
    if( ! array_key_exists('connecter', $_SESSION) ){
        echo "
        <script type=\"text/javascript\">
        var connecter = false;
        </script>
        ";
    }
    else{
        if($_SESSION["connecter"] == true ){
            if(isset($_SESSION["id"])){
                echo "<script type=\"text/javascript\">
                var connecter = true;
                </script>
                ";

                echo "
                <script type=\"text/javascript\">
                var email =\"".$_SESSION["id"]."\";
                </script>
                ";
            }
            else{
                echo "
                <script type=\"text/javascript\">
                var connecter = true;
                </script>
                ";
            }
        }
        else{
            echo "
            <script type=\"text/javascript\">
            var connecter = false;
            </script>
            ";
        }
    }
    ?>
    <!-- Favicon  -->
    <!-- <link rel="icon" href="images/favicon.png"> -->
    

</head>
