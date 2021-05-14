function ajouterLogement(){
  console.log("je suis dans ajout logement js");
  if(connecter){
    console.log("rttrt 1");

    verif_connexion(false);
        //document.location.href = "./index.php"; 
      }
      else{
        console.log("ins")
        ajouter();
      }
    }

    function ajouter(){

     var typeLogement = $("#typeLogement").val();
     var localite = $("#localite").val();
     var description = $("#description").val();
     var prix = $("#prix").val();
     //var typeTransaction = $("#typeTransaction").val();

    var typeTransaction = $("#typeTransaction:checked").val();


    var nomProprio = $("#nomProprio").val();
    var prenomProprio = $("#prenomProprio").val();
    var nbrePiece = $("#nbrePiece").val();

     var email = $("#email").val();
     var date = $("#date").val();

     var img = $("#img").val();

     var url = "php/logement.php";
     console.log("img");
     if(localite != "" ){
      console.log(img);
      $.post(url, {localite:localite, description:description, prix : prix, typeLogement : typeLogement , typeTransaction : typeTransaction, nomProprio : nomProprio, prenomProprio : prenomProprio, nbrePiece : nbrePiece ,email : email, date : date, photo : img}, 
        function(data) {
          console.log("inin")

                //infos = data.infos;
                console.log(data);

                console.log("inin 2")


                if(data.length != 0){
             //  verif_connexion(true);
              //  document.location.href = "./index.php"; 
              $("#connect_error").html("");
            }
            else{
              $("#connect_error").html("Logement non ajouté.");
            }

          },"json");            
    }

  }

