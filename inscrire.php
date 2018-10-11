
<html lang="en">
<head>
  <title>Espace Evenement s'inscrire </title>
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
    <img src="http://www.audessousdessus.com/wp-content/uploads/2017/02/site-rencontre.jpg" alt="" class="col-md-5" height="500px">
    <div class="container col-md-6">
        <div>
            <?php
            session_start();
            if(isset($_SESSION['erreur'])){
                echo $_SESSION['erreur'];

            }
            unset($_SESSION['erreur']);

            ?>
        </div>
            <h2>Inscrivez-vous</h2>
            <form action="Controller/traitementIns.php" method="post">
              <div class="form-group">
                <label for="nomcomplet">Nom complet:</label>
                <input type="text" class="form-control" name="nom" placeholder="Enter Nom complet">
              </div>
              <div class="form-group">
                <label for="Pseudo">prenom:</label>
                <input type="text" class="form-control" name="prenom" placeholder="Enter prenom">
              </div>
                <div class="form-group">
                    <label for="Pseudo">Num Tel:</label>
                    <input type="text" class="form-control" name="telephone" placeholder="Enter Num">
                </div>
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" name="pwd" placeholder="Enter password">
              </div>
              <div class="form-group">
                
                <input type="password" class="form-control" name="pwd1" placeholder="Confirm votre mot de passe">
              </div>
              <div class="checkbox">
                    <label><input type="checkbox" name="chek"> J'accepte les termes et conditions</label>
              </div>
              
              <input name="inscrire"  type="submit" onclick="myFunction()" class="btn btn-success form-control form-group mon-bouton" value="inscrire">
              <p>vous avez déja un compte <a href="connecter.php" >Connectez vous</a></p>
             
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
<!--<script src="script.js"></script>-->
</html>
