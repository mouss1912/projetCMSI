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
     var typeTransaction = $("#typeTransaction").val();
     var img = $("#img").val();

     var url = "php/logement.php";
     console.log("img");
     if(localite != "" ){
      console.log(img);
      $.post(url, {localite:localite, description:description, prix : prix, typeLogement : typeLogement , typeTransaction : typeTransaction, photo : img}, 
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

