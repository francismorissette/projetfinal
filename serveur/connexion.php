<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Connexion </title>

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
          <h1 class="display-4 text-white mt-5 mb-2">Connexion</h1>
          <p class="lead mb-5 text-white-50">Entrez vos détails de compte</p>
        </div>
      </div>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">

    <div class="row">
      <form action="Autentifier.php" method="post">
      <div class="form-group">
        <label for="exampleInputEmail1">Adresse courriel</label>
        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
        <small id="emailHelp" class="form-text text-muted">Nous ne jamais partagerons votre courriel avec les sources externes.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Mot de passe</label>
        <input type="password" class="form-control" name="motdepasse" id="exampleInputPassword1" placeholder="Password">
      </div>
<div id="fb-root">
<div class="fb-login-button" data-width="" data-size="large" data-button-type="continue_with"
  data-auto-logout-link="false" data-use-continue-as="false"></div>
</div>
<div class="row mb-4">

        <div class="col-6">
          <button type="submit" class="btn btn-primary text-left">Envoyer</button>
        </div>
        <div class="col-6">
          <a href "mdpoublie" id="oublie" class="form-text text-muted text-right">Mot de passe oublié?</a>
        </div>
</div>

    </form>

    <!--fb login button start -->
    <div class="fb-login-button" data-width="" data-size="medium" data-button-type="login_with" data-auto-logout-link="false" data-use-continue-as="true"></div>
    </div>
    <!--fb login button end -->
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
	<span class="psw">Je suis <a href="inscription.membre.php">Pas encore membre</a></span>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- fb login button script SDK start -->
<!--  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/uk_UA/sdk.js#xfbml=1&version=v3.2"></script>-->
<!-- fb login button script SDK end -->
</body>

</html>
