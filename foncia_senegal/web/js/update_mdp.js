
 //Modification mot de passe
 $('#form_change_mdp').validator().on('submit', function(e) {
 	e.preventDefault();
 	var mdp = $("#c_new_mdp").val();

 	if($("#c_new_mdp").val().localeCompare($("#c_new_mdp_c").val()) == 0){
 		$.post("php/update_mdp.php", {c_new_mdp:mdp}, function(data) {
 			json = JSON.parse(data);
 			console.log(json)
 			if(json["valider"]){
 				$("#c_new_mdp_submit").html("Modification terminé");
 				
 				$("#c_new_mdp").val("");
 				$("#c_new_mdp_c").val("");
 			}
 			else{
 				$("#c_new_mdp_submit").html("Erreur : "+json["error"]);
 			}
 		});
 	}
 	else{
 		$("#c_new_mdp_submit").html("Veuillez entrer le même mot de passe dans les deux champs");
 	}
 	
 });