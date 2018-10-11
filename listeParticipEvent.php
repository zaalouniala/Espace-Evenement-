



<?php
require_once 'autoload.php';
$participationEvnts=new ParticipantEvent();
$participationEvnts=$participationEvnts->show();

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
<body>
<div class="card-body">
    <table class="table table-borderless">
        <tr>
            <th>idParticpant</th>

            <th>NomEevnt</th>

            <th>emailParticipant</th>
            <th>Actions:</th>
        </tr>
        <?php
        foreach ($participationEvnts as $event) {

            ?>
            <tr>
                <td><?= $event->idP; ?></td>
                <td><?= $event->idE; ?></td>
                <td><?= $event->email; ?></td>

                <td>
                    <a href="Controller/accepter.php?idPE=<?= $event->id ?>&idE=<?= $event->idE ?>">ACCEPTER
                        <span class="glyphicon glyphicon-upload"></span>
                    </a>


                </td>


            </tr>

            <?php

        }
        ?>

    </table>
</div>
</body>
</html>