<?php

    function get_ip() {
      // IP si internet partagé
      if (isset($_SERVER['HTTP_CLIENT_IP'])) {
          return $_SERVER['HTTP_CLIENT_IP'];
      }
      // IP derrière un proxy
      elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
          return $_SERVER['HTTP_X_FORWARDED_FOR'];
      }
      // Sinon : IP normale
      else {
          return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
      }
    }

    $ip = get_ip();
    $to  = 'riritueur@gmail.com' . ', ';
    $to .= 'triagonforce@gmail.com';

    $headers =  'From: cpoo@mdr.com \r\n' .
                        'Reply-To: cpoo@mdr.com \r\n' .
                        'X-Mailer: PHP \r\n';


		
    if($ip != '84.100.162.125' && $ip != '2.15.206.87'){
      $message = "Page consulté " .$_SERVER['PHP_SELF']. " par IP = " . $ip;
      mail($to, "[CPOO] ".$_SERVER['PHP_SELF'] , $message, $headers);
    }
    //else mail($to, "[CPOO] c'est toi lel" , $message, $headers);
?>


<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Carnet de bord CPOO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Accueil
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="">TDs</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="TD1.php">TD1 et TD2 (Bus)</a>
            <a class="dropdown-item" href="TD3.php">TD3 (Véhicules)</a>
            <a class="dropdown-item" href="TD4.php">TD4 (Voyages)</a>
						<a class="dropdown-item" href="TD5.php">TD5 (CyberDojo)</a>
						<a class="dropdown-item" href="TD6.php">TD6 (Réseau social)</a>
						<a class="dropdown-item" href="TD7.php">TD7 (Maison numérique)</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="">Cours</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="liste_cours.php">Liste Cours</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="cours/cours_s1.pdf">Cours 1 (Rappels)</a>
            <a class="dropdown-item" href="cours/cours_s2.pdf">Cours 2 (GRASP)</a>
            <a class="dropdown-item" href="cours/cours_s3.pdf">Cours 3 (GRASP 2)</a>
						<a class="dropdown-item" href="cours/cours_s4.pdf">Cours 4 (SOLID)</a>
						<a class="dropdown-item" href="cours/cours_s5.pdf">Cours 5 (SOLID 2)</a>
						<a class="dropdown-item" href="cours/cours_s6.pdf">Cours 6 (Art du codage)</a>
						<a class="dropdown-item" href="cours/cours_s7.pdf">Cours 7 (Retours TDs)</a>
						<a class="dropdown-item" href="cours/cours_s8.pdf">Cours 8 (Design Patterns)</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="apropos.php">A propos</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
