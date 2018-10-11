<?php
require '../autoload.php';
if(isset($_POST['creer'])){


    if(!empty($_POST['nom']) and !empty($_POST['dteD']) and !empty($_POST['dteF'])and !empty($_POST['nbr']) and !empty($_POST['lieu'])){
            $nom=$_POST['nom'];
            $dteD=$_POST['dteD'];
            $dteF=$_POST['dteF'];
            $lieu=$_POST['lieu'];
            $nbDePlace=$_POST['nbr'];


            $event=new Evenment($nom,$dteD,$dteF,$lieu,$nbDePlace);
            $event->addEvent($nom,$dteD,$dteF,$lieu,$nbDePlace);
        header("location:../acceuil.php");

    }

}