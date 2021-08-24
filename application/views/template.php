<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Homepage - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo vendor_url("bootstrap/css/bootstrap.min.css") ?>" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo css_url("shop-homepage.css") ?>" rel="stylesheet">

</head>

<body>
  <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Caisse- ETU001121-ETU001105</a>
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
              <a class="nav-link" href="<?php echo site_url("Achat/changerCaisse") ?>">Changer de Caisse</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->

  <?php include($vue); ?>

  <!-- Footer -->
  
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo vendor_url("jquery/jquery.min.js") ?>"></script>
  <script src="<?php echo vendor_url("bootstrap/js/bootstrap.bundle.min.js")?> "></script>

</body>

</html>
