function modal(){

	$('#modalcontact').fadeIn(300);
	$('#modalcontact').css('display','block');

}

function closeModal()
{
	$('#modalcontact').fadeOut(300);
}

//EMAIL


$(document).ready(function(){
	$('#fullpage').fullpage({
		 responsiveWidth: 1024,
		 // anchors:['section1', 'section2', 'section3', 'section4', 'section5', 'section6']
	});

	$('#close').click(function(){

		closeModal();

	});

	$('.btncontact').click(function(){

		modal();

	});
	
	// $('.lien').on('click', function() { // Au clic sur un élément
	// 	var page = $(this).attr('href'); // Page cible
	// 	var speed = 750; // Durée de l'animation (en ms)
	// 	$('html, body').animate( { scrollTop: $("#"+page).offset().top }, speed ); // Go
	// 	return false;
	// });

	$('#valid').click(function(e){

		var nom = $('#nom').val();
		var email = $('#email').val();
		var sujet = $('#sujet').val();
		var message = $('#message').val();

		$.ajax({
			url: "pages/verif.php",
			type: 'POST',
			data: "nom=" + nom + "&email=" + email + "&sujet=" + sujet + "&message=" + message,
			dataType: 'html',
			success: function(retour, statut){
				$('#affichage').html(JSON.parse($retour));
			},
			error: function(resultat, statut, error){
				$('#affichage').html('erreur appel ajax' + 'code retour = ' + retour + 'statut = ' + statut);
			}
		});



	});

});//READY