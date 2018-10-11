<?php
require '../autoload.php';
session_start();
if(isset($_POST['connecter'])) {




if (!empty($_POST['email']) and  !empty($_POST['pwd']) ) {
    //  Récupération de l'utilisateur et de son pass hashé

    $email=$_POST['email'];

    $utulisateur=new Utilisateur;
    $resultat = $utulisateur->connecter($email);

// Comparaison du pass envoyé via le formulaire avec la base
    $isPasswordCorrect = password_verify($_POST['pwd'], $resultat['password']);


    if (!$resultat)
    {
        $_SESSION['message']='Mauvais identifiant ou mot de passe !';
        header("location:../connecter.php");
    }
    else
    {
        if ($isPasswordCorrect) {

            $_SESSION['id'] = $resultat['id'];
            $_SESSION['email'] = $email;
            if (!empty($_POST['chek'])) {
                setcookie("id",$resultat['id'],time()+6658887);
                setcookie("pwd",$resultat['password'],time()+6658887);
            }
            $_SESSION['message']= 'Bonjour Vous êtes connecté !';
            if($resultat['role']=="admin"){
                header("location:../acceuil.php");
            }
            else{
                header("location:../acceuilUser.php");
            }



        }

    }
}
}

?>