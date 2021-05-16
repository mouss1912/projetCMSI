
function register() {
    console.log("je suis dans register");
    if(connecter){
        console.log("rttrt 1");

        verif_connexion(false);
        //document.location.href = "./index.php"; 
    }
    else{
        console.log("ins")
        inscrire();
    }

}

function inscrire() {

    //  var mail = $("#cmail").val();
    // var mdp  = $("#cpassword").val();


    var nom = $("#cnom").val();
    var prenom = $("#cprenom").val();
    var email = $("#cemail").val();
    var password = $("#cmdp").val();
    var tel = $("#ctel").val();
    var adresse = $("#cadresse").val();
    var civilite = $("#ccivilite").val();


    var url = "php/inscription.php";

    if(nom != "" && prenom != "" && email != "" && password != "" && tel != "" && adresse != "" && civilite != ""){
        console.log("bbb")
        $.post(url, {nom:nom, prenom:prenom, email:email, password:password, tel:tel, adresse:adresse, civilite:civilite }, 
            function(data) {
                console.log("inin")

                //infos = data.infos;
                console.log(data);

         if(data.length != 0){
             //  verif_connexion(true);
             alert("inscription bien pris en compte");
                document.location.href = "./index.php"; 
             $("#connect_error").html("");
         }
         else{
            $("#connect_error").html("Addresse mail ou mot de passe incorrect inscription.");
        }

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

