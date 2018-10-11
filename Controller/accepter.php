<?php
require '../autoload.php';
$id=$_GET['idPE'];
$idE=$_GET['idE'];



$participationEvent=new ParticipantEvent();
$participationEvent->update($id);
$event = new Evenment();

$resultat=$event->show($idE);
$nbRestant=$resultat['nbRestant'];
$event->update($idE,$nbRestant);

header('location:../listeParticipEvent.php');