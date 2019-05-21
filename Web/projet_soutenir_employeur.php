
<?php
	require_once("action/ProjetSoutenirEmployeurAction.php");
	$action = new ProjetSoutenirEmployeurAction();
	$action->execute();
	require_once("partial/header.php");
?>

			<script src="ckeditor/ckeditor.js"></script>
			<script src="js/boutons_modifier.js"></script>

			<!-- CONTENT -->
			<div id="content">
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
						</div>

					</div>
					<div class="row">

						<div class="col-sm-4">
							<div class="cadre-image-projet">
								<img src="images/projets/projet_soutenir_employeur.jpg">
							</div>
							<?php
								if ($action->isLoggedIn() && $action->enModeEcriture()) {
									echo $action->optionImage();
									$action->televerserImage();
								}
							?>
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
