
<?php
	require_once("action/ProjetConsortiumGestionDiversiteAction.php");
	$action = new ProjetConsortiumGestionDiversiteAction();
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
								<img src="images/projets/projet_consortium_gestion_diversite.jpg">
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
							<!-- <p>Ce projet a regroupé trois centres collégiaux de transfert de technologie en pratiques sociales novatrices (CCTT-PSN) en vue de promouvoir et de favoriser l’inclusion professionnelle des jeunes âgés entre 25 et 34 ans de divers horizons, dont les immigrants et les personnes en situation de handicap. Le CRISPESH, le Centre d’études des conditions de vie et des besoins de la population (ÉCOBES) et l’Institut de recherche sur l’intégration professionnelle des immigrants (IRIPI) ont uni leurs expertises dans le cadre de cette alliance stratégique qui, à terme, a proposé une offre de service visant à améliorer le taux d’emploi de cette population et à répondre aux besoins de main-d’œuvre des entreprises québécoises.</p>
							<hr>
							<h6>Chercheuse</h6>
							<p>Marise Lachapelle</p>
							<hr> -->
							<a href="nos_projets" class="btn btn-blue btn_retour_projet">Retour à la liste des projets</a>
						</div><!-- col -->

					</div><!-- row -->
				</div><!-- container -->

<?php
	require_once("partial/footer.php");
