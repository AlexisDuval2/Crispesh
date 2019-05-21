
<?php
	require_once("action/DAO/ContentDao.php");
	require_once("action/EquipeConseilAction.php");
	$action = new EquipeConseilAction();
	$action->execute();
	require_once("partial/header.php");
?>

			<script src="ckeditor/ckeditor.js"></script>
			<script src="js/boutons_modifier.js"></script>

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
									<li>
										<a href="equipe">Équipe du CRISPESH</a>
									</li>
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
										<a href="equipe_personnel_admin">Personnel administratif</a>
									</li>
									<li>
										<a href="equipe_personnel_scientifique">Personnel scientifique</a>
									</li>
									<li>
										<a href="equipe_etudiants">Étudiants (Assistants de recherche et stagiaires)</a>
									</li>
									<li>
										<a href="equipe_chercheurs">Chercheuses et chercheurs affiliés</a>
									</li>
									<li class="active">
										<a href="equipe_conseil">Conseil d’administration</a>
									</li>
									<li>
										<a href="equipe_emplois">Emplois au CRISPESH</a>
									</li>
								</ul>
							</div><!-- widget-categories -->
						</div><!-- col -->
						<div class="col-sm-7 wrap_liste_personnel">

							<div class="col-sm-12">
								<?php
									if ($action->isLoggedIn() && $action->enModeEcriture()) {
										echo $action->optionsEmploye(1);
									} else {
										echo ContentDao::lire_emp(1);
									}
								?>
							</div>

							<div class="col-sm-12">
								<div class="espace-apres-emp"></div>
							</div>

							<div class="col-sm-12">
								<?php
									if ($action->isLoggedIn() && $action->enModeEcriture()) {
										echo $action->optionsEmploye(2);
									} else {
										echo ContentDao::lire_emp(2);
									}
								?>
							</div>

							<div class="col-sm-12">
								<div class="espace-apres-emp"></div>
							</div>

							<div class="col-sm-12">
								<?php
									if ($action->isLoggedIn() && $action->enModeEcriture()) {
										echo $action->optionsEmploye(3);
									} else {
										echo ContentDao::lire_emp(3);
									}
								?>
							</div>

						</div><!-- col -->
						<div class="rond_background jaune droite grosseur_2" id="cercle_2"></div>
					</div><!-- row -->
				</div><!-- container -->

<?php
	require_once("partial/footer.php");
