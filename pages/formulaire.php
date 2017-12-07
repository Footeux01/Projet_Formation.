<?php
   $retour = "";
   $vides = "Votre formulaire contient des champs vides !";

    if (!empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['prenom']))
    {
            
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);      
        $email = htmlspecialchars($_POST['email']);
        $numero = htmlspecialchars($_POST['numero']);
        $adresse1 = htmlspecialchars($_POST['adresse1']);
        $postal = htmlspecialchars($_POST['postal']);
        $ville = htmlspecialchars($_POST['ville']);
        $message = htmlspecialchars($_POST['message']);

        $message = "Bienvenue, Mr/Mme ".$nom;

        $header = 'From: ' ."contact@equipe4.com". "\r\n" .
         'Reply-To: ' . "contact@equipe4.com" . "\r\n" .
         'X-Mailer: PHP/' . phpversion();

         try {
             $bdd = new PDO ('mysql:host = localost; dbname = projetgroupe', 'root', '');
         } catch (Exception $e) {
            die ('Erreur : '.$e->getMessage());
         }

         $bdd->exec('INSERT INTO formulaire_one_page(id_expediteur, nom, mail, sujet, message) VALUES (NULL, '$nom', '$email', '$header', '$message')');

        // if (mail($email, $header, $message,))//(ne pas oublier de configurer php.ini + sendmail.ini ou serveur mail) actuellement configuré sur ssl0.ovh.net port: 465
        // {
        //     $retour = "Message envoyé !";
        // } else {
        //     $retour = "Message non transmis !";
        // }
    } else {
        echo $vides;
    }

    echo json_encode($retour);
?>