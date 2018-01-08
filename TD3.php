<!DOCTYPE html>
<html lang="fr">

<head>

  <?php include('./include/meta.php'); ?>
  <title>CDBCPOO - TD1</title>

</head>

<body>

  <?php include('./include/nav.php'); ?>

  <!-- Page Content -->
  <div class="container-fluid">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-9">

        <!-- Title -->
        <h1 class="mt-4">TD1</h1>

        <!-- Lead -->
        <p class="lead">
         Titre du TD
        </p>

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">

        <hr>

        <!-- Post Content -->
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum minus inventore?</p>

        <blockquote class="blockquote">
          <p class="mb-0">Citation intéressante</p>
          <footer class="blockquote-footer">Richard PERES,
            <cite title="Source Title">'Ma vie, mon oeuvre'</cite>
          </footer>
        </blockquote>

        
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>
        
        <iframe src="http://richard-peres.xyz/Carnet_De_Bord/TD1.pdf" class="drive"></iframe>

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
