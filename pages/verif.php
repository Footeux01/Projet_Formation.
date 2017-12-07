<?php
    $retour = "";
    $vides = "Votre formulaire contient des champs vides !";

	if (!empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['sujet']))
	{
			
		$nom = htmlspecialchars($_POST['nom']);
		$email = htmlspecialchars($_POST['email']);
		$sujet = htmlspecialchars($_POST['sujet']);

		$message = "Bienvenue, Mr/Mme ".$nom;

		$header = 'From: ' ."contact@equipe4.com". "\r\n" .
	     'Reply-To: ' . "contact@equipe4.com" . "\r\n" .
	     'X-Mailer: PHP/' . phpversion();

		if (mail($email, $header, $message))//(ne pas oublier de configurer php.ini + sendmail.ini ou serveur mail) actuellement configuré sur ssl0.ovh.net port: 465
		{
			$retour = "Message envoyé !";
		} else {
			$retour = "Message non transmis !";
		}
	} else {
		echo $vides;
	}

	echo json_encode($retour);
?>