<?php

require '../autoload.php';
session_start();
$idEvent=$_GET['idEvent'];
$idUser=$_SESSION['id'];
$email=$_SESSION['email'];
$utulisateur=new Utilisateur;
$resultat = $utulisateur->connecter($email);
$nom=$resultat['nom'];
$prenom=$resultat['prenom'];
$participation=new ParticipantEvent();
$participation->addParticipation($idUser,$idEvent,$email);
if($resultat['role']=="admin"){
    header("location:../VoirEvent.php");
}
else{
    header("location:../VoirEventUser.php");
}




