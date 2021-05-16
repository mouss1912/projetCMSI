
function visiterLogement(){
 console.log("je suis dans ajout logement js");
 if(connecter){
  verif_connexion(false);
        //document.location.href = "./index.php"; 
      }
      else{
        console.log("ins");
       // visiter();
     }
   }


   $(".id_input_visite").click(function(){
    id_input_visite = $(this);
    var url  = "php/visite.php";

    console.log("supr 2");

    $.post(url, {idLog:$(this).attr('data-id')}, function(data, status, xhr) {
        //Verifie si le status code est un succes
        console.log("visite moussa.com beaugueause bébé mouss !");

        if(xhr.status == 200){
         console.log("okokok");
         console.log(data);
         obj = JSON.parse(data);
        console.log(obj["data_view"]);
        $("#block_viste").html(obj["data_view"]);
      }                        
    }).fail(function(xhr, status, error) {
      if(xhr.status == 401){
        alert("vous devez être connecter");
      }                        
    });
  });