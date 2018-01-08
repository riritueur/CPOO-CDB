<!DOCTYPE html>
<html lang="fr">

<head>

  <?php include('./include/meta.php'); ?>
  <title>CDBCPOO - Accueil</title>

</head>

<body>

  <?php include('./include/nav.php'); ?>

  <!-- Page Content -->
  <div class="container-fluid">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-9">

          <!-- Jumbotron Header -->
          <header class="jumbotron my-4">
            <h1 class="display-3">Carnet de Bord de CPOO</h1>
            <p class="lead">Réalisé par <a href="http://richard-peres.xyz"> Richard PERES </a> et François RIGAUT.</p>
          </header>

          <!-- Page Features -->
          <div class="row text-center">

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <img class="card-img-top" src="ressource/thumbnail_TD1.png" alt="" title="" >
                <div class="card-body">
                  <h4 class="card-title">TD1 et TD2 - Bus</h4>
                  <p class="card-text">Ce TD porte sur la création d'une application de gestion de bus de messages. Le thème abordé est celui de la responsabilité.</p>
                </div>
                <div class="card-footer">
                  <a href="TD1.php" class="btn btn-primary">Voir le TD</a>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <img class="card-img-top" src="ressource/thumbnail_TD3.png" alt="">
                <div class="card-body">
                  <h4 class="card-title">TD3 - Véhicules</h4>
                  <p class="card-text">Dans ce TD, nous avons dû créer des véhicules possédant des attributs en commun et répartis en catégories pour aborder les thèmes du polymorphisme et de la composition.</p>
                </div>
                <div class="card-footer">
                  <a href="TD3.php" class="btn btn-primary">Voir le TD</a>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <img class="card-img-top" src="ressource/thumbnail_TD4.png" alt="">
                <div class="card-body">
                  <h4 class="card-title">TD4 - Voyages</h4>
                  <p class="card-text">Ce TD consiste à récupérer du code déjà écrit et à le modifier pour ajouter de nouvelles fonctionnalités. Cela permet d'aborder le principe ouvert/fermé.</p>
                </div>
                <div class="card-footer">
                  <a href="TD4.php" class="btn btn-primary">Voir le TD</a>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <img class="card-img-top" src="ressource/thumbnail_TD5.png" alt="">
                <div class="card-body">
                  <h4 class="card-title">TD5 - CyberDojo</h4>
                  <p class="card-text">Ce TD un peu différent porte sur l'utilisation de CyberDojo afin de découvrir une manière de coder un peu différente.</p>
                </div>
                <div class="card-footer">
                  <a href="TD5.php" class="btn btn-primary">Voir le TD</a>
                </div>
              </div>
            </div>
        </div>
				<div class="row text-center">
					<div class="col-lg-3 col-md-6 mb-4">
					</div>
					<div class="col-lg-3 col-md-6 mb-4">
						<div class="card">
							<img class="card-img-top" src="ressource/thumbnail_TD6.png" alt="">
							<div class="card-body">
								<h4 class="card-title">TD6 - Réseau social</h4>
								<p class="card-text">La réutilisation de code est un thème très important pour les développeurs, et c'est celui abordé dans ce TD.</p>
							</div>
							<div class="card-footer">
								<a href="TD6.php" class="btn btn-primary">Voir le TD</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 mb-4">
						<div class="card">
							<img class="card-img-top" src="ressource/thumbnail_TD7.png" alt="">
							<div class="card-body">
								<h4 class="card-title">TD7 - Maison numérique</h4>
								<p class="card-text">Les design patterns sont des outils extrêmement utiles pour concevoir des applications propres. Ce TD se penche sur ce thème par le biais du développement d'une maison numérique.</p>
							</div>
							<div class="card-footer">
								<a href="TD7.php" class="btn btn-primary">Voir le TD</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 mb-4">
					</div>
				</div>
      </div>

      <?php include('./include/sidebar.php'); ?>

    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
  <?php include('./include/footer.php'); ?>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
