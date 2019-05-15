
<?php
	require_once("action/RechercheAppliqueeAction.php");
	$action = new RechercheAppliqueeAction();
	$action->execute();
	require_once("partial/header.php");
?>

			<!-- CONTENT -->
			<div id="content">
				<div id="page-header" class="style-1">
					<div class="container">
						<div class="row">
							<div class="col-sm-6">

								<h4>Nos services</h4>

							</div><!-- col -->
							<div class="col-sm-6">
								<ol class="breadcrumb">
									<li>
										<a href="index">Accueil</a>
									</li>
									<li>
										<a href="services_conseils">Nos services</a>
									</li>
									<li class="active">Recherche appliquée</li>
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
									<li class="active">
										<a href="recherche_appliquee">Recherche appliquée</a>
									</li>
									<li>
										<a href="services_accompagnement">Services d'accompagnement en innovation sociale</a>
									</li>
									<li>
										<a href="laboratoire_technologies_adaptatives">Laboratoire en technologies adaptatives</a>
									</li>
									<li>
										<a href="formation_transfert">Formation et transfert</a>
									</li>
								</ul>
							</div><!-- widget-categories -->
						</div><!-- col -->
						<div class="col-sm-7">
							<div class="blog-article">
								<h1>Recherche appliquée</h1>
								<p>En se dédiant au volet appliqué, le CRISPESH fait le pont entre la recherche et la communauté. L’équipe propose des adaptations pratiques, basées sur les résultats de la recherche fondamentale, afin de solutionner ou de résoudre différents problèmes sociaux en collaborant et en accompagnant les milieux dans les volets suivants:</p>
								<ul>
									<li>Le développement et la mise en œuvre de projets de recherche appliquée</li>
									<li>Le développement de partenariats de recherche avec les milieux communautaires, collégiaux et universitaires</li>
									<li>L’encadrement d’étudiants de niveau collégial et universitaire</li>
								</ul>
							</div><!-- blog-article -->
						</div><!-- col -->
						<div class="rond_background jaune droite grosseur_2" id="cercle_2"></div>
					</div><!-- row -->
				</div><!-- container -->

<?php
	require_once("partial/footer.php");
