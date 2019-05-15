
<?php
	require_once("action/ConseilAction.php");
	$action = new ConseilAction();
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
									<li class="active">Conseil d’administration</li>
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
									<li>
										<a href="chercheurses_chercheurs">Chercheuses et chercheurs affiliés</a>
									</li>
									<li class="active">
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
								<h6>Richard Filion</h6>
								<p>Président</p>
								<p>Directeur général du Collège Dawson</p>
							</div>
							<br>
							<div class="col-sm-12">
								<hr>
								<h6>Mylène Boisclair</h6>
								<p>Vice-présidente</p>
								<p>Directrice générale au Cégep du Vieux Montréal</p>
							</div>
							<br>
							<div class="col-sm-12">
								<hr>
								<h6>Martin Prévost</h6>
								<p>Secrétaire et trésorier</p>
								<p>Directeur adjoint des études au Cégep du Vieux Montréal</p>
							</div>
							<br>
						</div><!-- col -->
						<div class="rond_background jaune droite grosseur_2" id="cercle_2"></div>
					</div><!-- row -->
				</div><!-- container -->

<?php
	require_once("partial/footer.php");
