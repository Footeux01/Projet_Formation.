	function initMap() {
        var vichy = {lat: 46.1293022, lng: 3.4311705};
        var map = new google.maps.Map(document.getElementById('maps'), {
			zoom: 18,
			center: vichy,
        });
        var marker = new google.maps.Marker({
			position: vichy,
			map: map,
        });
	}


$(document).ready(function(){
	if ($(window).width() > 768){
		$('section').css("height", $(window).height().toString());
		$('#bg-video').css("height", $(window).height().toString());
	}
	
	$(window).resize(function() {
		if ($(window).width() > 768){
			$('section').css("height", $(window).height().toString());
		}else{
			$('section').css("height","auto");
		}
	});
	
	$(window).resize(function() {
		$('#bg-video').css("height", $(window).height().toString());
	});
	
	
	
	$(window).scroll(function() {    
		var scroll = $(window).scrollTop();
		
		if ($(window).width() >= 768){
			
			if (scroll >= ($(window).height()-40)) {
				$(".menu-principal").css("color","#000000");
				$(".navbar-default").css("background-color","#FFFFFF");
				
				if ($(window).width() <= 1024){
					$('#logo-header').css('max-width','20%');
				}else{
					$('#logo-header').css('max-width','10%');
				}
				
			} else {
				$(".menu-principal").css("color","");
				$(".navbar-default").css("background-color","transparent");
				$('#logo-header').css('max-width','40%');
				
			}
		
		}else{
			$(".menu-principal").css("color","#000000");
			$(".navbar-default").css("background-color","rgba(255,255,255,0.8");
			$('#logo-header').parent().css('float','none');
			$('#logo-header').css('max-width','15%');
		}
	});
	
	$(".menu-principal").hover(function(){
		var scroll = $(window).scrollTop();
		if ($(window).width() > 768){
			if (scroll >= ($(window).height()-40)) {
				$('this').css("color","#CACACA");
			}else{
				$("this").css("color","#000000");
				$("this").parent().css("background-color","#FFFFFF");
			}
		}else{
			$("this").css("color","#000000");
			$("this").parent().css("background-color","transparent");
			$('#logo-header').css('max-width','40%')
		}
	});
	
	$('.menu-principal').on('click', function() {
		var section = $(this).attr('href');
		$('html, body').animate( { scrollTop: $(section).offset().top }, 750 );
		return false;
	});
	
	// Formulaire
	
	function surligne(evt, erreur)
	{
	   if(erreur){
		 $(evt).css("background-color","#fba");
	   }
	   else{
		  $(evt).css("background-color","");
	   }
	}

	function verifText(evt)
	{
	   console.log($(evt).val());
	   if($(evt).val().length < 2 || $(evt).val().length > 20)
	   {
		  surligne (evt, true);
		  return false;
	   }
	   else
	   {
		  surligne (evt, false);
		  return true;
	   }
	}

	function verifMail(evt)
	{
		var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
		if(!regex.test(evt.value))
		{
			surligne(evt, true);
			return false;
		}
		else
		{
			surligne(evt, false);
			return true;
		}
	}

	function verifMess(evt)
	{
		if($(evt).val().length < 2 || $(evt).val().length > 250)
			{
				surligne(evt, true);
				return false;
			}
			else
			{
				surligne(evt, false);
				return true;
			}
	}

	function verifForm()
	{
		var f=document.getElementById("formcontact");

		var nomOk = verifText(f.nom);
		var prenomOK = verifText(f.prenom);
		var mailOk = verifMail(f.mail);
		var messOk = verifMess(f.message);


		if(nomOk && prenomOK && mailOk && messOk)
		{
			return true;
		}
		else
		{
			return false;    
		}
	}

	$('#valid').click(function(e){
		e.preventDefault();

		if ( verifForm()) {

			var nom= $("#nom").val();
			var prenom= $("#prenom").val();
			var mail= $("#mail").val();
			var message= $("#message").val();
			var valid= $("#valid").val();

			$.ajax({
				url :'verif.php',
				type:'POST',
				data : 'nom=' + nom + '&prenom=' + prenom + '&mail=' +mail + '&message=' + message + '&valid=' +valid,
				dataType : 'html',
				success : function(retour, statut){$("#result").html(retour);},
				error :function(resultat, statut, erreur){$("#result").html('erreur ajax : code retour = '+retour+'statut='+statut);}
			});
		}
		else{
			$("#result").html("Veuillez remplir tous les champs correctement.");
		}
	});
	
	// Portofolio
	
	$("#gglide").glide({
		type: "carousel",
		autoHeight: true,
		beforeTransition: function(evt, data){
			$(".animate").removeClass('animate');
		}
	});  


	$('.glide__slide').click(function(evt){
		$(this).toggleClass('animate');
	});
	

	
});