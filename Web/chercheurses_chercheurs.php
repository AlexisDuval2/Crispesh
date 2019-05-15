
<?php
	require_once("action/ChercheursesChercheursAction.php");
	$action = new ChercheursesChercheursAction();
	$action->execute();
	require_once("partial/header.php");
?>

			<!-- CONTENT -->
			<div id="content">
				<div id="page-header" class="style-1">
					<div class="container">
						<div class="row">
							<div class="col-sm-4">

								<h4>Équipe du CRISPESH </h4>

							</div><!-- col -->
							<div class="col-sm-8">
								<ol class="breadcrumb">
									<li>
										<a href="index">Accueil</a>
									</li>
									<li>Équipe du CRISPESH </li>
									<li class="active">Étudiants</li>
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
										<a href="personnel_administratif">Personnel administratif</a>
									</li>
									<li>
										<a href="personnel_scientifique">Personnel scientifique</a>
									</li>
									<li>
										<a href="etudiants">Étudiants (Assistants de recherche et stagiaires)</a>
									</li>
									<li class="active">
										<a href="chercheurses_chercheurs">Chercheuses et chercheurs affiliés</a>
									</li>
									<li>
										<a href="conseil">Conseil d’administration</a>
									</li>
									<li>
										<a href="emplois">Emplois au CRISPESH</a>
									</li>
								</ul>
							</div><!-- widget-categories -->
						</div><!-- col -->
						<div class="col-sm-7 wrap_liste_personnel">
							<div class="col-sm-12">
								<h6>Catherine Fichten</h6>
								<p>Enseignante au Collège Dawson</p>
								<p>Professeure associée à l’Université McGill</p>
								<p>Département de psychologie</p>
								<p>Codirectrice du Réseau de Recherche Adaptech (www.adaptech.org)</p>
							</div>
							<div class="col-sm-12">
								<hr>
								<h6>Alice Havel</h6>
								<p>Retraitée du Collège Dawson</p>
								<p>Coordonnatrice du AccessAbility Centre</p>
								<p>Chercheuse associée au Réseau de Recherche Adaptech</p>
							</div>
							<div class="col-sm-12">
								<hr>
								<h6>Tara Flanagan</h6>
								<p>Professeure Associée à l’Université McGill</p>
								<p>Département d’Educational and Counselling Psychology</p>
							</div>
							<div class="col-sm-12">
								<hr>
								<h6>Josianne Robert</h6>
								<p>Professeure de formation pratique adjointe à l’Université de Montréal</p>
								<p>Département de psychopédagogie et d’andragogie</p>
							</div>
						</div><!-- col -->
						<div class="rond_background rouge droite grosseur_2" id="cercle_2"></div>
					</div><!-- row -->
				</div><!-- container -->
				<div class="rond_background vert droite grosseur_5" id="cercle_2"></div>

<?php
	require_once("partial/footer.php");
