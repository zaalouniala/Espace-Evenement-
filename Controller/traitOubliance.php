<?php
require '../autoload.php';

//Récuperer email depuis variable $_POST
if(isset($_POST["valider"])) {
    $email = $_POST["email"];
//Verification existance de l'email sur la base de données
    $utilisateur=new Utilisateur();
    $utilisateur->validChange($email);

//Si le mail existe
    if ($resultat) {
//Créer le message a envoyer par mail avec un lien menant vers la page permettant la modification de mot de passe
//Envoyer le mail
//Rediriger vers une page confirmant l'envoie d'email
        $token = $resultat["token"];
        $pseudo = $resultat["pseudo"];
        $header = "MIME-Version: 1.0\r\n";
        $header .= 'From:"zaalouni"<membership@validation.tn>' . "\n";
        $header .= 'Content-Type: text/html; charset="UTF-8"' . "\n";
        $header .= 'Content-Transfer-Encoding:8bit';
        $message = '
           <h1> Bienvenue sur VotreSite</h1>

           <p> Pour activer votre compte, veuillez cliquer sur le lien ci dessous ou copier/coller dans votre navigateur internet.</p>
           <a href="http://localhost/projets/espace%20membre/changer.php?pseudo=' . urlencode($pseudo) . '&token=' . urlencode($token) . ' ">cliquez ici pour valider</a>
           ---------------
           Ceci est un mail automatique, Merci de ne pas y répondre.';

        mail("$email", 'Validation EMail', $message, $header);
        header("location:connecter.php");


    } else {
        echo "mail non valide";

    }
}

?>