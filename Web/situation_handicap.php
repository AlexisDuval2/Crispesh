
<?php
	require_once("action/SituationHandicapAction.php");
	$action = new SituationHandicapAction();
	$action->execute();
	require_once("partial/header.php");
?>

			<!-- CONTENT -->
			<div id="content">
				<div id="page-header" class="style-1">
					<div class="container">
						<div class="row">
							<div class="col-sm-6">

								<h4>Qui sont les personnes en situation de handicap?</h4>

							</div><!-- col -->
							<div class="col-sm-6">
								<ol class="breadcrumb">
									<li>
										<a href="index.php">Accueil</a>
									</li>
									<li>
										<a href="qui_sommes_nous.php">À propos</a>
									</li>
									<li class="active">Situation de handicap</li>
								</ol>
							</div><!-- col -->
						</div><!-- row -->
					</div><!-- container -->
				</div><!-- page-header -->

				<div class="container">
					<div class="row">
						<div class="col-sm-5">
							<div class="widget widget-categories">
								<ul>
									<li>
										<a href="inclusion_sociale.php">L’inclusion sociale</a>
									</li>
									<li>
										<a href="innovation_sociale.php">L'innovation sociale</a>
									</li>
									<li>
										<a href="conception_handicap.php">Notre conception du handicap</a>
									</li>
									<li class="active">
										<a href="situation_handicap.php">Qui sont les personnes en situation de handicap</a>
									</li>
									<li>
										<a href="champs_expertise.php">Champs d'expertise</a>
									</li>
									<li>
										<a href="partenaires.php">Nos partenaires</a>
									</li>
								</ul>
							</div><!-- widget-categories -->
						</div><!-- col -->
						<div class="col-sm-7">
							<div class="blog-article">
								<h1>Qui sont les personnes en situation de handicap?</h1>
								<p>Les personnes en situation de handicap sont celles qui font face à des obstacles qui limitent leur participation sociale et leurs possibilités d’interaction avec leur environnement. Temporaire ou permanent, le handicap peut être de nature intellectuelle, sensorielle, physique, psychique ou sociale. Il n’est pas nécessaire d’être infirme pour se retrouver en situation de handicap. Tout le monde, à un moment ou un autre de la vie, peut se retrouver dans une situation de handicap.</p>
							</div><!-- blog-article -->
						</div><!-- col -->
					</div><!-- row -->
				</div><!-- container -->
				<div class="rond_background jaune droite grosseur_1 no_margin_right" id="cercle_2"></div>

<?php
	require_once("partial/footer.php");
