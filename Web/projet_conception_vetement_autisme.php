
<?php
	require_once("action/ProjetConceptionVetementAutismeAction.php");
	$action = new ProjetConceptionVetementAutismeAction();
	$action->execute();
	require_once("partial/header.php");
?>

			<!-- CONTENT -->
			<div id="content">
				<div class="container">
					<div class="row">

						<div class="col-sm-12">
							<?php
								if ($action->isLoggedIn() && $action->enModeEcriture()) {
									echo $action->optionsTitreProjet();
								} else {
							?>
							<div id="index-texte">
								<?php echo ContentDao::lire_titreProjet(); ?>
							</div>
							<?php } ?>
						</div>
					</div>
					<div class="row">

						<div class="col-sm-4">
							<div class="cadre-image-projet">
								<img src="images/projets/projet_conception_vetement_autisme.jpg">
							</div>
							<?php
								if ($action->isLoggedIn() && $action->enModeEcriture()) {
									echo $action->optionImage();
									$action->televerserImage();
								}
							?>
						</div>

						<div class="col-sm-8">
							<p>Dans le cadre du Programme d’aide à la recherche et au transfert (PART), Vestechpro et le CRISPESH se sont associées à une entreprise québécoise pour concevoir un vêtement de compression adapté pour les adolescents et les jeunes adultes atteints d’un trouble du spectre de l’autisme. En effet, les vêtements disponibles à l’heure actuelle ne répondent pas aux besoins de cette clientèle. Les clients trouvent que ces vêtements sont volumineux, coûtent cher, ne sont pas totalement confortables et sont rarement ajustables au besoin de chacun en matière de pression ou compression. De plus, les produits disponibles visent surtout les jeunes enfants et permettent souvent d’identifier les personnes les portant comme étant différentes en raison de leur style particulier.</p>
							<p>Ainsi, l’objectif principal de ce projet était la conception d’un vêtement adapté pour les adolescents et les jeunes adultes atteints d’un trouble du spectre de l’autisme.</p>
							<div class="col-sm-12">
								<hr>
								<h6>Chargée de projet et chercheuse</h6>
								<p>Marise Lachapelle</p>
							</div>
							<div class="col-sm-12">
								<hr>
								<h6>Chercheur</h6>
								<p>Joseph Darrous</p>
							</div>
							<div class="col-sm-12">
								<hr>
								<h6>Assistantes de recherche</h6>
								<p>Mélissa Miller</p>
								<p>Étudiante en Histoire et civilisation au Cégep du Vieux Montréal</p>
								<p>Odile Trudeau-Richard</p>
								<p>Étudiante en Histoire et civilisation au Cégep du Vieux Montréal</p>
							</div>
							<div class="col-sm-12">
								<hr>
								<a href="nos_projets" class="btn btn-blue btn_retour_projet">Retour à la liste des projets</a>
							</div>
						</div><!-- col -->
					</div><!-- row -->
				</div><!-- container -->

<?php
	require_once("partial/footer.php");
