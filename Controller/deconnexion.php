<?php
require '../autoload.php';
session_start();

// Suppression des variables de session et de la session
$_SESSION = array();
session_destroy();

// Suppression des cookies de connexion automatique
setcookie('pwd', '');
setcookie('id', '');
header("location:../connecter.php");