<?php
require '../autoload.php';
session_start();
if (isset($_GET["email"]) and isset($_GET["token"])) {
    $pseudo = $_GET["email"];
    $token = $_GET["token"];
    //Verification existance de l'email sur la base de données
    //select token dan la base de donner
    $utilisateur=new Utilisateur();
    $utilisateur->preChange($email,$token);

    if (!$resultat) {
        $_SESSION['resultChange'] = "lien non valide";
        header("location:connecter.php");
    }
    $_SESSION['emailChange'] = $email;

}
else{
    header("location:../connecter.php");
}
if (isset($_POST["changer"])) {
    if(!empty($_POST['pwd'])and !empty($_POST['pwd1'])){

        $email1=$_SESSION['emailChange'];
        if ($_POST['pwd'] = $_POST['pwd1']) {
            $pwd_hashe = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
            $newtoken = sha1(+$pseudo + time());
            $utilisateur=new Utilisateur();
            $utilisateur->changeMdp($pwd_hashe,$email1, $newtoken);


            unset($_SESSION['emailChange']);
            $_SESSION['resultChange']="mot de de passe change";
            header("location:../connecter.php");
        }
        else{
            $_SESSION['resultChange']="erreur mot de passe";
        }

    }
}
