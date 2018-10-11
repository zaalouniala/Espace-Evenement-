

<?php
require 'autoload.php';

$events = new Evenment();
$events = $events->showArchive();
$utilisateur=new Utilisateur();
?>
<html>
<head>
    <title>Listes des evenements:</title>
    <link rel="stylesheet" a href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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

<div class="card-body">

    <table class="table table-borderless ">
        <tr>
            <th>nom:</th>
            <th>Dte debut:</th>
            <th>Dte fin:</th>
            <th>lieu:</th>
            <th>Nbre de places total</th>
            <th>Nbre de places restants</th>
            <th>    </th>
        </tr>
        <?php
        foreach ($events as $event) {

            ?>
            <tr>
                <td><?= $event->nom; ?></td>
                <td><?= $event->dteD; ?></td>
                <td><?= $event->dteF; ?></td>
                <td><?= $event->lieu; ?></td>
                <td><?= $event->nbDePlace; ?></td>
                <td><?= $event->nbRestant; ?></td>


                <td>



                </td>
            </tr>

            <?php

        }
        ?>
    </table>
</div>
</body>
</html>