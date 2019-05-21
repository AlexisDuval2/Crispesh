
<?php
	require_once("action/ProjetIntegrerEtudiantsAction.php");
	$action = new ProjetIntegrerEtudiantsAction();
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

							<div class="col-sm-12 titre-projet">
								<?php
									if ($action->isLoggedIn() && $action->enModeEcriture()) {
										echo $action->optionsTitreProjet();
									} else {
										echo ContentDao::lire_titreProjet();
									}
								?>
							</div><!-- col -->

						</div><!-- row -->
					</div><!-- container -->
				</div><!-- page-header -->

				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<div class="widget widget-categories">

								<div class="cadre-image-projet">
									<img src="images/projets/projet_integrer_etudiants.jpg">
								</div>
								<?php
									if ($action->isLoggedIn() && $action->enModeEcriture()) {
										echo $action->optionImage();
										$action->televerserImage();
									}
								?>
								<ul>
									<li class="">
										<a href="outils_generaux">Outils généraux</a>
									</li>
									<li class="">
										<a href="outils_etudiants">Outils pour les étudiants</a>
									</li>
									<li class="">
										<a href="outils_intervenants">Outils pour les intervenants</a>
									</li>
									<li class="">
										<a href="outils_enseignants">Outils pour les enseignants</a>
									</li>
									<li class="">
										<a href="outils_etablissements">Outils pour les établissements</a>
									</li>
								</ul>

							</div><!-- widget-categories -->
						</div>

						<div class="col-sm-8 texte-projet">
							<?php
								if ($action->isLoggedIn() && $action->enModeEcriture()) {
									echo $action->optionsTexteProjet();
								} else {
									echo ContentDao::lire_texteProjet();
								}
							?>
						</div><!-- col -->
						<a href="nos_projets" class="btn btn-blue btn_retour_projet">Retour à la liste des projets</a>

					</div><!-- row -->
				</div><!-- container -->

<?php
	require_once("partial/footer.php");
