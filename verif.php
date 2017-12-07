<?php

	$to = "v.laidet@aformac-vichy.fr ,s.riviere@aformac-vichy.fr ,n.benoukaci@aformac-vichy.fr ,s.lormelet@aformac-vichy.fr";
	$sujet = "formulaire du site";
    $message = "Vous avez reçus un message de : " . "\r\n" .
                    $_POST['nom']. "\r\n" .  
                    $_POST['prenom']. "\r\n" .
                   "message: " . "\r\n" . 
                   $_POST['message'] ;
    $headers = 'From:'. $_POST["mail"];
                            
                            
    if (mail($to, $sujet, $message, $headers))
    {
		echo "Message envoyé.";
    }
    else
    {
        echo "Message non envoyé.";
    }
?>