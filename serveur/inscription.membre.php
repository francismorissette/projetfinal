<!DOCTYPE html>
<html lang="fr">


<?php
require_once("./bd/connexion.inc.php");
    if(isset($_POST['submit']))
	{
		$nom= htmlspecialchars(trim($_POST['nom']));
		$prenom= htmlspecialchars(trim($_POST['prenom']));
		$email= htmlspecialchars(trim($_POST['email']));
		$motdepasse= htmlspecialchars(trim($_POST['motdepasse']));
		$role= htmlspecialchars(trim($_POST['role']));

		if($nom && $prenom && $email && $motdepasse)
		{
			if(strlen($nom)>=2)
			{
				if(strlen($motdepasse)>=2)
				{

	    $motdepasse = md5 ($motdepasse);
         require_once("./bd/connexion.inc.php");
		$ps=$pdo->prepare("INSERT INTO membre VALUES (0,?,?,?,?,?)");
		$params=array($nom,$prenom,$email,$motdepasse,$role);
		$ps->execute($params);

                      die('Insecription terminée, vous pouvez <a href="connexion.php">connecter</a>');

				}else echo "Le mot de passe est trop court";
			}else echo "Le nom d'tulisateur est trop court!";
		}else echo "Veuiller saisir tous les champs!";
    }
?>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Inscription du membre </title>

  <!-- Bootstrap core CSS -->

  <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">2 souffle</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="bg-primary py-5 mb-5">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-lg-12">
          <h1 class="display-4 text-white mt-5 mb-2">Inscription</h1>
          <p class="lead mb-5 text-white-50">Pour créer le compte, indiquez votre nom, prenom, courriel et mot de passe.</p>
        </div>
      </div>
    </div>
  </header>
     <form method="post" action="inscription.membre.php">
  <!-- Page Content -->
  <div class="container">

    <div class="row">

<div class="col-sm-6 mb-3">
  <div class="form-group">
  <form action="" method="Post">
   <label for="nom">Nom</label>
   <input type="text" class="form-control" name="nom" id="nom" placeholder="Votre nom">
</div>
</div>
<div class="col-sm-6 mb-3">
  <div class="form-group">
    <label for="prenom">Prénom</label>
    <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Votre prénom">
  </div>
</div>



<div class="col-sm-6 mb-3">
      <div class="form-group">
        <label for="email">Adresse courriel</label>
        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Votre courriel">
      </div>
</div>

<div class="col-sm-6 mb-3">
      <div class="form-group">
        <label for="motdepasse">Mot de passe pour le compte</label>
        <input type="password" class="form-control" name="motdepasse" id="motdepasse" placeholder="Mot de passe">
      </div>
</div>

<div class="col-sm-6">
      <div class="form-group">
       <label for="role">Role (seulement les administrateurs)</label>
       <input type="hidden" class="form-control" name="role" id="role" placeholder="role">
    </div>
  </div>
<div class="col-sm-6">
</div>

<div class="col-sm-12">
      <button type="submit" class="btn btn-primary" name="submit">Envoyer</button>
</div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
    </form>
  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Équipe 2019</p>
    </div>
	Vous avez déjà un compte? <a href="connexion.php">Connectez-vous .</a>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
