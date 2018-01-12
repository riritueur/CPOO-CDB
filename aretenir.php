<!DOCTYPE html>
<html lang="fr">

<head>

	<?php include('./include/meta.php'); ?>
	<title>CDBCPOO - À retenir</title>

</head>

<body>

	<?php include('./include/nav.php'); ?>

	<!-- Page Content -->
	<div class="container-fluid">

		<div class="row">

			<!-- Post Content Column -->
			<div class="col-lg-9">

				<!-- Title -->
				<h1 class="mt-4">À retenir</h1>

				<!-- Lead -->
				<h2>
					Une petite synthèse pour résumer les choses importantes à retenir
				</h2>

				<hr>

				<!-- Post Content -->
				<p class="lead">Les design patterns</p>
				<hr>
				<p class="lead">Le pattern Adapter (ou adaptateur)</p>
				<img class="img-fluid rounded" src="ressource/pattern_adapter.JPG" alt="">
				<br/>
				<p>Lorsqu'on doit utiliser une classe que l'on ne peut pas modifier (par exemple lorsqu'elle a été écrite par quelqu'un d'autre qui s'en sert toujours), ce pattern permet d'adapter la classe en question grâce à une classe "adaptateur", que l'on pourra ensuite utiliser dans notre code.</p>
				<p class="lead">Le pattern Composite</p>
				<img class="img-fluid rounded" src="ressource/pattern_composite.JPG" alt="">
				<br/>
				<p>Ce pattern très utile (et très utilisé) permet d'obtenir une hiérarchie de classes grâce à une composition.</p>
				<p class="lead">Le pattern State (ou état)</p>
				<img class="img-fluid rounded" src="ressource/pattern_etat.JPG" alt="">
				<br/>
				<p>Ce pattern permet de simuler le fait qu'un objet puisse changer de classe.</p>
				<p class="lead">Le pattern Factory</p>
				<img class="img-fluid rounded" src="ressource/pattern_factory.JPG" alt="">
				<br/>
				<p>Dans ce pattern, on peut faire en sorte qu'une classe "écoute" (ou "observe") une autre et se mette à jour à chaque fois que la classe "observée" effectue une certaine action.</p>
				<p class="lead">Le pattern Observer (ou observateur)</p>
				<img class="img-fluid rounded" src="ressource/pattern_observer.JPG" alt="">
				<br/><br/>
				<p class="lead">Les principes SOLID (Cours n°4)</p>
				<hr>
				<p> Les principes SOLID permettent d'écrire un code propre et fonctionnel, que l'on peut manipuler facilement et modifier/améliorer sans devoir tout refaire. Ils sont extrêmement utiles et doivent être respectés pour que le code soit bon. Ces principes sont les suivants:
					<ul>
						<li><strong><u>S</u>ingle responsibility principle (SRP) : une classe n’a qu’une seule responsabilité (ou préoccupation)</strong> - En effet, il faut répartir les responsabilités entre plusieurs classes, quitte à en créer plus que prévu. Pour cela, certains patterns peuvent vous aider, comme le pattern factory.</li>
						<li><strong><u>O</u>pen/closed principle (OCP) : une classe doit être ouverte à l’extension (par héritage, par exemple) mais fermé à la modification (attributs privés, par exemple)</strong> - Il faut bien gérer l'encapsulation et la structure du code pour qu'il soit à la fois stable et sécurisé et qu'on puisse y apporter des modifications facilement.</li>
						<li><strong><u>L</u>iskov subtition principle (LSP) : les objets d’un programme doivent pouvoir être remplacés par des instances de leurs sous-types sans «casser» le programme</strong> - Il paraît logique qu'on puisse instancier des objets d'une sous-classe en gardant les mêmes fonctionnalités grâce à la généralisation, mais cela peu paraître peu évident dans certains cas.</li>
						<li><strong><u>I</u>nterface segregation principle (ISP) : il vaut mieux plusieurs interfaces spécifiques qu’une unique interface générique.</strong> - Nous n'avons pas beaucoup abordé ce principe en cours puisque nous avons rarement travaillé sur les interfaces, c'est pourquoi le cours et internet seront certainement d'une plus grande utilité que nous cette fois-ci</li>
						peu évident dans certains cas.</li>
						<li><strong><u>D</u>ependency inversion principle (DIP) : il faut dépendre des abstractions, pas des réalisations concrètes</strong> - Les classes de haut niveau doivent être indépendantes des classes de bas niveau. Encore une fois, il paraît évident qu'une classe mère ne doive pas subir de contraintes d'une de ses classes filles, mais il faut faire attention à ne pas faire d'erreur de conception vis-à-vis de ce principe.</li>
					</ul>
				</p>

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
