
<div id="contact" class="form-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Informations de contact</h2>
                <ul class="list-unstyled li-space-lg">
                    <li class="address">N'hésite surtout pas à nous contacter via le formulaire ou l'adresse mail</li>
                    <li><i class="fas fa-map-marker-alt"></i>Adresse Dakar Senegal</li>
                    <li><i class="fas fa-envelope"></i><a class="turquoise" href="mailto:office@evolo.com">admin@gmail.com</a></li>
                </ul>
            </div>
        </div> 
        <div class="row">
            <div class="col-lg-6">

              <!-- Contact Form -->
              <form id="contactForm" data-toggle="validator" data-focus="false" >
                <div class="form-group">
                    <input type="text" class="form-control-input" id="cname" required>
                    <label class="label-control" for="cname">Nom</label>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control-input" id="cemail" required>
                    <label class="label-control" for="cemail">Email</label>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <textarea class="form-control-textarea" id="cmessage" required></textarea>
                    <label class="label-control" for="cmessage">Votre message</label>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group checkbox">
                    <input type="checkbox" id="cterms" value="Agreed-to-Terms" required>J'accepte les <a href="terms-conditions.html">conditions d'utilisation</a> 
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <button type="submit" class="form-control-submit-button">ENVOYER MESSAGE</button>
                </div>
                <div class="form-message">
                    <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                </div>
            </form>
            <!-- end of contact form -->

        </div> 
    </div> 
</div> 
</div> 




 <!-- <div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="footer-col">
                    <h4>A propos FONCIA</h4>
                    <p>XXXXXXXX .. .. ;</p>
                </div>
            </div> 
            <div class="col-md-4">
                <div class="footer-col middle">
                    <h4>Publier vos projet immobillier à venir</h4>
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body">Construction d'une cité à Saly <a class="turquoise" href="https://www.neosens-immobilier.com/programmes/7/saly-senegal-afrique/">https://www.neosens-immobilier.com/programmes/7/saly-senegal-afrique/</a></div>
                        </li>
                    </ul>
                </div>
            </div> 
            <div class="col-md-4">
                <div class="footer-col last">
                    <h4>Social Media</h4>
                    <span class="fa-stack">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </a>
                </span>
            </div> 
        </div> 
    </div> 
</div> 
</div> 
-->

<!-- Copyright -->
<!-- <div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="p-small">Copyright © DUCMSI - Arame, Linh, Moussa </p>
            </div> 
        </div> 
    </div> 
</div>  -->

<!-- Scripts -->
<script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
<script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
<script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
<script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
<script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
<script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
<script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
<script src="js/scripts.js"></script> <!-- Custom scripts -->

<script type="text/javascript">
    verif_connexion(connecter);
</script>


<script type="text/javascript">
        //Permet de lancer la connexion en appuyant sur le boutton entrée
        $("#details-lightbox-3").on('keyup', function (e) {
            if (e.keyCode === 13) {
                se_connecter();
            }
        });

        //Pour gerer la liste d'image sans texte
        $(".text_none").html(".");
        $(".text_none").css("opacity","0");//couleur en blanc


</script>
<script type="text/javascript" src="js/other_function.js"></script>
<script type="text/javascript" src="js/suppression.js"></script>

