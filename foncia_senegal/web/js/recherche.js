
function rechercher(){

 var typeLogement = $("#typeLogement").val();
 var localite = $("#localite").val();
 var nbrePiece = $("#nbrePiece").val();
 //var prix = $("#prix").val();
    // var typeTransaction = $("#typeTransaction").val();

    var url = "php/recherche.php";
     console.log(url);
    console.log("img");
    if(localite != "" ){
      console.log(img);
      $.post(url, {localite:localite, typeLogement : typeLogement, nbrePiece : nbrePiece}, function(data) {
          console.log("inin");
          console.log(data);
          console.log("inin 2");
          $("#services").html(data.chainFiltre);
          if(data.length != 0){
             //  verif_connexion(true);
              //  document.location.href = "./index.php"; 
              $("#connect_error").html("");
            }
            else{
              $("#connect_error").html("recherhce non ajouté.");
            }

          },"json");            
    }
  }

