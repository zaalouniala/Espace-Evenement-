

<?php

require_once 'autoload.php';
session_start();
$idP=$_SESSION['id'];


$utulisateur = new Utilisateur();
$events = new Evenment();
$events = $events->showValid();
$particpantEvent=new ParticipantEvent();

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


            <li><a href="acceuilUser.php">Acceuil </a></li>



        </ul>
        <ul class="nav navbar-nav navbar-right">

            <li><a href="Controller/deconnexion.php"><span class="glyphicon glyphicon-log-in"></span> SE DECONNECTER</a></li>
        </ul>
    </div>
</nav>

<div class="card-body">

    <table class="table table-borderless">

        <tr>
            <th>nom:</th>
            <th>Dte debut:</th>
            <th>Dte fin:</th>
            <th>lieu:</th>
            <th>Nbre de places total</th>
            <th>Nbre de places restants</th>
            <th>Actions:</th>
        </tr>
        <?php
        foreach ($events as $event) {
            $idE=$event->id;
            $resultat=$particpantEvent->verif($idE,$idP);


            ?>
            <tr>
                <td><?= $event->nom; ?></td>
                <td><?= $event->dteD; ?></td>
                <td><?= $event->dteF; ?></td>
                <td><?= $event->lieu; ?></td>
                <td><?= $event->nbDePlace; ?></td>
                <td><?= $event->nbRestant; ?></td>


                <td>
                    <?php
                    if(!$resultat['id']){
                        ?>

                    <a href="Controller/participe.php?idEvent=<?= $event->id?>">PARTICIPER
                        <span class="glyphicon glyphicon-upload"></span>
                    </a>
                    <?php
                    }
                    elseif(!$resultat['etat'])
                    { echo"votre demande est envoye";
                    }
                    else{
                        echo"vous ete participe";
                    }
                    ?>


                </td>


            </tr>

            <?php

        }
        ?>

    </table>
</div>
</body>
</html>