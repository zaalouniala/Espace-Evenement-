<?php
require 'autoload.php';
?>
<html lang="en">
<head>
    <title>Evenement GoMyCode </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" a href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="style4.css">
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="acceuil.php">ESPACE EVENEMENT</a>
        </div>
        <ul class="nav navbar-nav">
            <li class=""><a href="ajoutEvent.php">Ajouter Evenement</a></li>
            <li><a href="VoirEvent.php">Consulter les evnements</a></li>
            <li><a href="archive.php">Archives  evnements </a></li>
            <li><a href="listeParticipEvent.php">Consulter les Participants</a></li>


        </ul>
        <ul class="nav navbar-nav navbar-right">

            <li><a href="Controller/deconnexion.php"><span class="glyphicon glyphicon-log-in"></span> SE DECONNECTER</a></li>
        </ul>
    </div>
</nav>
<h1>Creer un evenement:</h1>
<div class="container">
<form action="Controller/traitementCreEvnt.php" method="post" class=" mx-auto ">
    <table class="table ">
     <tr class=" form-group">
         <td><label for="nomcomplet">Nom evenemet:</label></td>
         <td><input type="text" class="form-control" name="nom" placeholder="nom event"></td>
     </tr>
     <tr class="form-group">
         <td> <label for="nomcomplet">debut evenemet:</label></td>
         <td><input type="date" class="form-control" name="dteD" placeholder="date debut"></td>
    </tr>
    <tr class="form-group">
        <td><label for="nomcomplet">Fin evenemet:</label></td>
        <td><input type="date" class="form-control" name="dteF" placeholder="date Fin"></td>
    </tr>
    <tr class="form-group">
        <td><label for="nomcomplet">Nombre de place:</label></td>
        <td><input type="number" class="form-control" name="nbr" placeholder=""></td>
    </tr>
    <tr class="form-group">
        <td> <label for="nomcomplet">emplacement d'evenemet:</label></td>
        <td><input type="text" class="form-control" name="lieu" placeholder="lieu d'evenement"></td>
    </tr>
    </table>
    <input type="submit" name="creer" class="btn btn-primary" value="creer" >
</form>
</div>
</body>
</html>
