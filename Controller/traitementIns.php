<?php
session_start();
require '../autoload.php';
// inscription

// Vérification de la validité des informations
$utilisateur=new Utilisateur();

if(isset($_POST['inscrire'])){
if (!empty($_POST['nom']) and !empty($_POST['prenom']) and!empty($_POST['telephone']) and !empty($_POST['email']) and !empty($_POST['pwd']) and !empty($_POST['pwd1']) and !empty($_POST['chek'])) {
    $email=$_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if(!$utilisateur->exists($email) ){
        if ($_POST['pwd'] == $_POST['pwd1']) {
            //connexion base de donnes
            // creation d'u nouveau utulisateure

            $pass_hache = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
            $token=sha1($_POST['email'].time());
            $nom=$_POST['nom'];
            $prenom= $_POST['prenom'];
            $telephone=$_POST['telephone'];
            $utilisateur->inscription($nom,$prenom,$email,$pass_hache,$token,$telephone);

            //select token dan la base de donner


//Si le mail existe

//Créer le message a envoyer par mail avec un lien menant vers la page permettant la modification de mot de passe
//Envoyer le mail
//Rediriger vers une page confirmant l'envoie d'email



                $header = "MIME-Version: 1.0\r\n";
                $header .= 'From:"zaalouni"<membership@validation.tn>' . "\n";
                $header .= 'Content-Type: text/html; charset="UTF-8"' . "\n";
                $header .= 'Content-Transfer-Encoding:8bit';
                $message = '
           <h1> Bienvenue sur VotreSite</h1>

           <p> Pour activer votre compte, veuillez cliquer sur le lien ci dessous ou copier/coller dans votre navigateur internet.</p>
           <a href="http://localhost/projetsEvenment/connecter.php?prenom=' . urlencode($prenom) . '&token=' . urlencode($token) . ' ">cliquez ici pour valider votre inscription</a>
           ---------------
           Bonjour: Ceci est un mail automatique, Merci de ne pas y répondre.';

                mail("$email", 'Validation EMail', $message, $header);

            $_SESSION['succes']="consultez votre mail pour connecter";
                header("location:../connecter.php");








        }
        else {
            echo  $_SESSION['erreur']="mot de passe non valide";
            header("location:../inscrire.php");
        }
        }else{
            echo $_SESSION['erreur']= "cet email utulise par autre utilisateur";
            header("location:../inscrire.php");
        }


    }
    else {
        echo  $_SESSION['erreur']="Cet email a un format non valide.";
        header("location:../inscrire.php");
    }

}
else {
    echo  $_SESSION['erreur']=" il y a un champ vide";
    header("location:../inscrire.php");
}


}




