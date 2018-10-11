
<?php
require 'autoload.php';
?>


<html lang="en">
<head>
  <title>Se Connecter </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
<link rel="stylesheet" href="style4.css">
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php">ESPACE EVENEMENT</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
      <li><a href="home.php">ACCEUIL</a></li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="inscrire.php"><span class="glyphicon glyphicon-user"></span> S'INSCRIRE</a></li>
      <li><a href="connecter.php"><span class="glyphicon glyphicon-log-in"></span> SE CONNECTER</a></li>
    </ul>
  </div>
</nav>

<div>
        <img src="http://img.phonandroid.com/2017/06/enfants-internet-1024x683.jpg" alt="" class="col-md-5" height="500px">
        <div class="container col-md-6">
                <h2>Connecter-vous</h2>
            <div>
                <?php
                session_start();
                if(isset($_SESSION['succes'])){
                    echo $_SESSION['succes'];

                }
                unset($_SESSION['succes']);

                ?>
            </div>

                <form action="Controller/traitemenCnx.php" method="post">
                  
                  <div class="form-group">
                    <label for="Pseudo">email:</label>
                    <input type="text" class="form-control" name="email" placeholder="Enter email">
                  </div>
                  
                  <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" name="pwd" placeholder="Enter password">
                  </div>
                  
                  <div class="checkbox ">
                        <p class="changer">
                            <label><input type="checkbox" name="chek">Restez Connecté </label>
                            <a href="Oubliance.php">Mot de passe oublié ?</a>
                        </p>
                  </div>
                  
                  <input type="submit" name="connecter" class="btn btn-success form-control form-group" value="Connecter" >
                  <p>vous n'avez pas de compte <a href="inscrire.php" >Inscrivez vous ?</a></p>
                  
                </form>
                
              </div>
    </div>
<div class="w3-bar w3-black w3-hide-small social">
    <p>2018 Tous les droits sont reservés. Site crée ar ZAALOUNI ALA</p>
   <div>
    <a href="#" class="w3-bar-item w3-button"><i class="fa fa-facebook-official"></i></a>
    <a href="#" class="w3-bar-item w3-button"><i class="fa fa-instagram"></i></a>
    <a href="#" class="w3-bar-item w3-button"><i class="fa fa-snapchat"></i></a>
    <a href="#" class="w3-bar-item w3-button"><i class="fa fa-flickr"></i></a>
    <a href="#" class="w3-bar-item w3-button"><i class="fa fa-twitter"></i></a>
    <a href="#" class="w3-bar-item w3-button"><i class="fa fa-linkedin"></i></a>
  </div>
  
</body>
</html>
