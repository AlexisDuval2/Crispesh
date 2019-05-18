
<?php
	require_once("action/DAO/ContentDao.php");
	require_once("action/EquipePersonnelAdminAction.php");
	$action = new EquipePersonnelAdminAction();
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
									<li>
										<a href="equipe">Équipe du CRISPESH</a>
									</li>
									<li class="active">Personnel administratif</li>
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
									<li>
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
										echo $action->optionsTexte();
									} else {
								?>
								<div id="index-texte">
									<?php echo ContentDao::lireTexteIndex(); ?>
								</div>
								<?php } ?>

								<!-- <h6>Roch Ducharme</h6>
								<p>Directeur général</p>
								<ul>
									<li>rducharme@cvm.qc.ca</li>
									<li>514 982-3437, poste 2835</li>
								</ul> -->
							</div>
							<div class="col-sm-12">
								<hr>
								<h6>Jian Wang</h6>
								<p>Adjointe administrative</p>
								<ul>
									<li>jywang@cvm.qc.ca</li>
									<li>514 982-3437, poste 2836</li>
								</ul>
							</div>
						</div><!-- col -->
						<div class="rond_background bleu droite grosseur_1" id="cercle_2"></div>
					</div><!-- row -->
				</div><!-- container -->

<?php
	require_once("partial/footer.php");
