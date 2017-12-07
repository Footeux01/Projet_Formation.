$(document).ready(function(){

	$("#envoi").click(function(e){ 
		var nom = $("#nom").val();
		var prenom = $("#prenom").val();
		var email = $("#email").val();
		var numero = $("#numero").val();
		var adresse1 = $("#adresse1").val();
		var postal = $("#postal").val();
		var ville = $("#ville").val();
		var message = $("#message").val();

		// e.preventDefault(); on l'active que si le bouton est dans le formulaire, or dans notre cas on l'a sorti
		$.ajax({ 
			url : 'pages/formulaire.php',
			type : 'POST',
			data : 'nom=' + nom + '&prenom=' + prenom + '&email=' + email + '&numero=' + numero + '&adresse1=' + adresse1+ '&postal=' + postal + '&ville=' + ville + '&message=' + message,
			dataType : 'html',

			success : function(retour,statut){
				$("#retour").html(JSON.parse($retour));
			},
			error : function(resultat, statut, erreur){
				$("#retour").html('erreur appel ajax' + ' code retour = ' + retour + 'statut = ' + statut);
			}

		});
	});
});