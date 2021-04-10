
function register() {
    console.log("je suis dans register");
    if(connecter){
        verif_connexion(false);
        console.log("rttrt");
        document.location.href = "./index.php"; 
    }
    else{
        inscrire();
    }

}

function inscrire() {

    //  var mail = $("#cmail").val();
    // var mdp  = $("#cpassword").val();


    var nom = $("#cnom").val();
    var prenom = $("#cprenom").val();
    var email = $("#cemail").val();
    var mdp = $("#cmdp").val();
    var tel = $("#ctel").val();
    var adresse = $("#cadresse").val();
    var civilite = $("#ccivilite").val();


    var url = "php/inscription.php";

    if( nom != "" && prenom != "" && email != "" && mdp != "" && tel != "" && adresse != "" && civilite != "" ){
        $.post(url, {cnom:nom, cprenom:prenom, cemail:email, cmdp:mdp, ctel:tel, cadresse:adresse, ccivilite:civilite }, 
            function(data) {

             //    infos = data.infos;
             //    console.log(infos);

             //    if(infos.length != 0){
             // //  verif_connexion(true);
             document.location.href = "./index.php"; 
        //      $("#connect_error").html("");
        //  }
        //  else{
        //     $("#connect_error").html("Addresse mail ou mot de passe incorrect inscription.");
        // }

    },"json");            
    }
    // else{
    //     if(email == ""){
    //         $("#connect_error").html("Veuillez saisir votre mail");
    //     }
    //     else if(mdp == ""){
    //         $("#connect_error").html("Veuillez saisir votre mot de passe");
    //     }
    // }
}

