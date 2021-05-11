
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


    $(".id_input").click(function(){
        id_input = $(this);
        var url  = "php/visite.php";

        console.log("supr 2");

        $.post(url, {idLog:$(this).attr('data-id')}, function(data, status, xhr) {
            //Verifie si le status code est un succes
                               console.log("supr 3");

            if(xhr.status == 200){
              id = id_input.attr("data-id");
              $(".example-1[data-id=\""+id+"\"]").getElementsByTagName('');
            }                        
          }).fail(function(xhr, status, error) {
            if(xhr.status == 401){
              alert("vous devez être connecter");
            }                        
          });
    });